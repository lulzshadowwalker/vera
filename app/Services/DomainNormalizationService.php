<?php

namespace App\Services;

class DomainNormalizationService
{
    /**
     * Normalize an email address or domain to a standardized domain format.
     *
     * @param  string  $input  Email address or domain
     * @return string|null Normalized domain or null if invalid
     */
    public function normalize(string $input): ?string
    {
        $input = trim($input);

        // If it looks like an email, extract the domain
        if (str_contains($input, '@')) {
            $parts = explode('@', $input);
            // Must have exactly 2 parts and both must be non-empty
            if (count($parts) !== 2 || empty($parts[0]) || empty($parts[1])) {
                return null;
            }
            $domain = $parts[1];
        } else {
            $domain = $input;
        }

        // Remove protocol if present
        $domain = preg_replace('#^https?://#i', '', $domain);

        // Remove www. prefix
        $domain = preg_replace('#^www\.#i', '', $domain);

        // Remove trailing slashes and paths
        $domain = strtok($domain, '/');

        // Remove port if present
        $domain = strtok($domain, ':');

        // Convert to lowercase
        $domain = strtolower($domain);

        // Remove whitespace
        $domain = trim($domain);

        // Validate the domain format
        if (! $this->isValidDomain($domain)) {
            return null;
        }

        return $domain;
    }

    /**
     * Check if a domain is valid.
     */
    public function isValidDomain(string $domain): bool
    {
        // Basic domain validation
        if (empty($domain)) {
            return false;
        }

        // Check for valid characters (alphanumeric, dots, hyphens)
        if (! preg_match('/^[a-z0-9.-]+$/i', $domain)) {
            return false;
        }

        // Must contain at least one dot
        if (! str_contains($domain, '.')) {
            return false;
        }

        // Cannot start or end with a dot or hyphen
        if (preg_match('/^[.-]|[.-]$/', $domain)) {
            return false;
        }

        // Cannot have consecutive dots
        if (str_contains($domain, '..')) {
            return false;
        }

        // Validate each label (part between dots)
        $labels = explode('.', $domain);
        foreach ($labels as $label) {
            // Each label must be non-empty
            if (empty($label)) {
                return false;
            }
            // Each label cannot start or end with hyphen
            if (str_starts_with($label, '-') || str_ends_with($label, '-')) {
                return false;
            }
            // Each label must be 63 characters or less
            if (strlen($label) > 63) {
                return false;
            }
        }

        // TLD (last label) must be at least 2 characters and cannot be all numeric
        $tld = end($labels);
        if (strlen($tld) < 2 || is_numeric($tld)) {
            return false;
        }

        return true;
    }

    /**
     * Check if an email domain is a blocked public provider.
     */
    public function isBlockedProvider(string $email): bool
    {
        $domain = $this->normalize($email);

        if (! $domain) {
            return false;
        }

        $blockedProviders = config('app.blocked_email_providers', []);

        return in_array($domain, $blockedProviders, true);
    }

    /**
     * Extract domain from an email address.
     */
    public function extractDomain(string $email): ?string
    {
        return $this->normalize($email);
    }
}
