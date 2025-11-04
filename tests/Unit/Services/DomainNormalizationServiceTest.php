<?php

namespace Tests\Unit\Services;

use App\Services\DomainNormalizationService;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class DomainNormalizationServiceTest extends TestCase
{
    private DomainNormalizationService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new DomainNormalizationService;
    }

    #[Test]
    public function it_normalizes_email_addresses_to_domains(): void
    {
        $this->assertEquals('example.com', $this->service->normalize('user@example.com'));
        $this->assertEquals('company.co.uk', $this->service->normalize('admin@company.co.uk'));
        $this->assertEquals('test-company.com', $this->service->normalize('info@test-company.com'));
    }

    #[Test]
    public function it_normalizes_domains_with_www_prefix(): void
    {
        $this->assertEquals('example.com', $this->service->normalize('www.example.com'));
        $this->assertEquals('example.com', $this->service->normalize('WWW.EXAMPLE.COM'));
        $this->assertEquals('example.com', $this->service->normalize('user@www.example.com'));
    }

    #[Test]
    public function it_normalizes_domains_with_protocol(): void
    {
        $this->assertEquals('example.com', $this->service->normalize('http://example.com'));
        $this->assertEquals('example.com', $this->service->normalize('https://example.com'));
        $this->assertEquals('example.com', $this->service->normalize('HTTP://WWW.EXAMPLE.COM'));
        $this->assertEquals('example.com', $this->service->normalize('https://www.example.com'));
    }

    #[Test]
    public function it_removes_trailing_paths_and_slashes(): void
    {
        $this->assertEquals('example.com', $this->service->normalize('example.com/'));
        $this->assertEquals('example.com', $this->service->normalize('example.com/path/to/page'));
        $this->assertEquals('example.com', $this->service->normalize('https://www.example.com/about'));
        $this->assertEquals('example.com', $this->service->normalize('user@example.com/invalid'));
    }

    #[Test]
    public function it_removes_port_numbers(): void
    {
        $this->assertEquals('example.com', $this->service->normalize('example.com:8080'));
        $this->assertEquals('example.com', $this->service->normalize('https://example.com:443'));
        $this->assertEquals('example.com', $this->service->normalize('user@example.com:25'));
    }

    #[Test]
    public function it_converts_to_lowercase(): void
    {
        $this->assertEquals('example.com', $this->service->normalize('EXAMPLE.COM'));
        $this->assertEquals('example.com', $this->service->normalize('Example.Com'));
        $this->assertEquals('example.com', $this->service->normalize('USER@EXAMPLE.COM'));
    }

    #[Test]
    public function it_handles_complex_normalization_scenarios(): void
    {
        $this->assertEquals('example.com', $this->service->normalize('HTTPS://WWW.EXAMPLE.COM:443/path'));
        $this->assertEquals('company.co.uk', $this->service->normalize('admin@WWW.COMPANY.CO.UK'));
        $this->assertEquals('test.example.com', $this->service->normalize('http://test.example.com/'));
    }

    #[Test]
    public function it_returns_null_for_invalid_emails(): void
    {
        $this->assertNull($this->service->normalize('invalid-email'));
        $this->assertNull($this->service->normalize('user@'));
        $this->assertNull($this->service->normalize('@example.com'));
        $this->assertNull($this->service->normalize('user@@example.com'));
    }

    #[Test]
    public function it_returns_null_for_invalid_domains(): void
    {
        $this->assertNull($this->service->normalize(''));
        $this->assertNull($this->service->normalize('   '));
        $this->assertNull($this->service->normalize('nodot'));
        $this->assertNull($this->service->normalize('.example.com'));
        $this->assertNull($this->service->normalize('example.com.'));
        $this->assertNull($this->service->normalize('example..com'));
        $this->assertNull($this->service->normalize('-example.com'));
        $this->assertNull($this->service->normalize('example-.com'));
    }

    #[Test]
    public function it_validates_domains_correctly(): void
    {
        $this->assertTrue($this->service->isValidDomain('example.com'));
        $this->assertTrue($this->service->isValidDomain('sub.example.com'));
        $this->assertTrue($this->service->isValidDomain('example.co.uk'));
        $this->assertTrue($this->service->isValidDomain('test-company.com'));
        $this->assertTrue($this->service->isValidDomain('123.example.com'));

        $this->assertFalse($this->service->isValidDomain(''));
        $this->assertFalse($this->service->isValidDomain('nodot'));
        $this->assertFalse($this->service->isValidDomain('.example.com'));
        $this->assertFalse($this->service->isValidDomain('example.com.'));
        $this->assertFalse($this->service->isValidDomain('example..com'));
        $this->assertFalse($this->service->isValidDomain('-example.com'));
        $this->assertFalse($this->service->isValidDomain('example.com-'));
        $this->assertFalse($this->service->isValidDomain('exam ple.com'));
        $this->assertFalse($this->service->isValidDomain('example$.com'));
    }

    #[Test]
    public function it_detects_blocked_email_providers(): void
    {
        $this->assertTrue($this->service->isBlockedProvider('user@gmail.com'));
        $this->assertTrue($this->service->isBlockedProvider('user@GMAIL.COM'));
        $this->assertTrue($this->service->isBlockedProvider('user@yahoo.com'));
        $this->assertTrue($this->service->isBlockedProvider('user@hotmail.com'));
        $this->assertTrue($this->service->isBlockedProvider('user@outlook.com'));
    }

    #[Test]
    public function it_allows_work_email_domains(): void
    {
        $this->assertFalse($this->service->isBlockedProvider('user@company.com'));
        $this->assertFalse($this->service->isBlockedProvider('admin@business.co.uk'));
        $this->assertFalse($this->service->isBlockedProvider('info@startup.io'));
    }

    #[Test]
    public function it_extracts_domain_from_email(): void
    {
        $this->assertEquals('example.com', $this->service->extractDomain('user@example.com'));
        $this->assertEquals('company.co.uk', $this->service->extractDomain('admin@company.co.uk'));
        $this->assertNull($this->service->extractDomain('invalid-email'));
    }

    #[Test]
    public function it_handles_subdomains(): void
    {
        $this->assertEquals('mail.example.com', $this->service->normalize('user@mail.example.com'));
        $this->assertEquals('subdomain.company.co.uk', $this->service->normalize('subdomain.company.co.uk'));
        $this->assertEquals('deep.sub.example.com', $this->service->normalize('https://deep.sub.example.com'));
    }

    #[Test]
    public function it_trims_whitespace(): void
    {
        $this->assertEquals('example.com', $this->service->normalize('  example.com  '));
        $this->assertEquals('example.com', $this->service->normalize('  user@example.com  '));
    }
}
