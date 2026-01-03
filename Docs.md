# Industrial Supplier Reviews Platform: Business & Technical Overview

## 1. Introduction

### Platform Purpose

The **Industrial Supplier Reviews Platform** is a secure, scalable B2B web application built to foster transparency and trust in the industrial supply chain. It enables verified employees from businesses to submit and access authentic reviews of suppliers based on real-world experiences. By verifying business identities and structuring feedback, the platform helps buyers make data-driven procurement decisions while allowing suppliers to understand and improve their performance.

### Core Value Proposition

- **For Buyers**: Access detailed, unbiased reviews to evaluate suppliers on key metrics such as cost, reliability, and quality—minimizing procurement risk.
- **For Suppliers**: Gain actionable insights into how they’re perceived, identify areas for improvement, and build credibility through verified profiles and aggregated scores.
- **Market Differentiation**: Unlike consumer platforms (e.g., Yelp), this is strictly B2B—authentic, domain-verified, and tailored to industrial performance metrics. Any supplier can also review their own vendors, ensuring bidirectional transparency.

### Target Audience

- **Primary Users**: Procurement teams, operations managers, and executives in manufacturing, construction, energy, and logistics.
- **Geographic Focus**: Global, with support for country tagging (e.g., Jordan-based suppliers).
- **Scale**: Freemium model with basic free access and premium plans for full data and multi-seat access (implementation deferred).

### Business Model

- **Monetization**: Freemium tiers (free: teaser data; paid: full access, multi-user).
- **Growth Strategy**: Organic distribution through shared review links, SEO-optimized supplier profiles, and integrations with business directories.
- **Compliance**: GDPR-ready design, with data minimization and moderation systems to prevent defamation or spam.

---

## 2. Key Features

### 2.1 Authentication & Verification

- **Signup/Login**: Passwordless via work email and OTP. Free domains (e.g., Gmail) are blocked via a configurable blacklist.
- **Domain-Based Grouping**: Emails from the same domain automatically join or create a “Supplier” entity.
- **Backup Email**: Optional verified secondary email for account recovery.
- **Security**: Rate-limited OTP (5/hour/email), hashed tokens, and session-based authentication.

### 2.2 Review Submission

- **Eligibility**: Only authenticated users. No self-reviews (domain mismatch check). Limit of 5 reviews per user per day.
- **Form Inputs**:
  - Supplier Identification: Enter domain or email → auto-normalized to domain (e.g., `www.example.com` → `example.com`).
  - Deal Date: Required and must be within the last 3 years.
  - Country: Optional (ISO2).
  - **10 Metrics** (1–10 scale, required): Cost, Speed, Communication, Reliability, Quality, Support, Flexibility, Innovation, Value, Timeliness.
  - Would Deal Again: Yes/No.
  - Comment: Optional, up to 160 characters with profanity filtering.
  - Anonymity: Default anonymous; if public, displays “Org Name – First Initial.”

- **Validation/Processing**: Strict server-side validation. Reviews queued for indexing and caching.

### 2.3 Supplier Profiles

- **Public URL**: `/supplier/{slug}` (slug derived from normalized domain).
- **Displayed Data**:
  - Supplier name/domain
  - Review count
  - Average overall score
  - Last review date
  - Per-metric averages

- **Review Cards**: Paginated with review metrics, country flag, and reviewer info (anonymous or public).
- **Future**: Domain owners can claim and edit profiles via OTP verification.

### 2.4 Discovery & Home Features

- **Homepage**: Displays total reviews (cached), a fuzzy search bar, and calls to action for signup/login.
- **Search**: Powered by Typesense, supports partial and fuzzy matches on supplier names/domains.
- **Shared Links**: Public review teasers (summary metrics) encourage signups for full access.

### 2.5 Moderation & Analytics (Deferred)

- Admin dashboard (Filament) for managing users, suppliers, and reviews.
- Tools for review unpublishing, abuse reporting, and data exports.

---

## 3. User Flows

### 3.1 New User Onboarding

1. User enters work email.
2. System verifies domain and sends OTP.
3. User confirms OTP, optionally adds a backup email.
4. Domain is normalized, supplier entity created/joined, user redirected to dashboard.
5. Dashboard suggests submitting a review or browsing existing ones.

### 3.2 Submitting a Review

1. Authenticated user searches for or enters supplier domain.
2. Fills out review form and submits.
3. Review is validated, processed, and indexed.

### 3.3 Viewing Supplier Profiles

1. User searches suppliers via homepage search.
2. Clicks profile to view aggregate ratings and recent reviews.
3. Can share supplier profile links externally.

### 3.4 Edge Cases

- Duplicate domains are normalized.
- Anonymous reviews are still tied to users for moderation.
- Unclaimed profiles are auto-generated upon first review.

---

## 4. Data Models

### 4.1 Supplier

- **Fields**: `id`, `domain` (unique, normalized), `name`, `country`, `claimed_at`, `slug`, timestamps, soft deletes.
- **Relations**:
  - `hasMany(User)` (employees)
  - `hasMany(Review as reviewerReviews)` (outgoing)
  - `hasMany(Review as reviewedReviews)` (incoming)

### 4.2 User

- **Fields**: `id`, `email` (unique), `first_name`, `backup_email`, `email_verified_at`, `otp_token`, `supplier_id`, timestamps.
- **Relations**: `belongsTo(Supplier)`

### 4.3 Review

- **Fields**: `id`, `reviewer_supplier_id`, `reviewed_supplier_id`, `user_id`, `deal_date`, `country`, 10 metrics (tinyint 1–10), `deal_again`, `comment`, `is_anonymous`, `published`, timestamps, soft deletes.
- **Relations**:
  - `belongsTo(User)`
  - `belongsTo(Supplier as reviewerSupplier)`
  - `belongsTo(Supplier as reviewedSupplier)`

- **Constraints**: One review per [user_id, reviewed_supplier_id] pair. Includes computed average score.

### 4.4 Database Notes

- Compatible with MySQL and PostgreSQL.
- Indexed fields: domain, FKs, published status.
- Metrics stored as separate columns for optimized queries and averages.

---

## 5. Technical Architecture

### 5.1 Framework & Stack

- **Backend**: Laravel 11.x (Eloquent ORM, Queues, Middleware).
- **Frontend**: Blade templates + Tailwind CSS with minimal Alpine.js for interactivity.
- **Auth**: Custom passwordless authentication using Sanctum for session management.
- **Search**: Typesense for real-time, fuzzy supplier and domain search.
- **Email/OTP**: Laravel Mailables with queued OTP dispatch.
- **Caching**: Redis for counters, rate limits, and quota tracking.
- **Deployment**: Laravel Forge or Vapor for scalability; Horizon for queue management.
- **Packages**:
  - `laravel/sanctum` (Auth)
  - `typesense/typesense-php` (Search)
  - Custom domain normalization and bad-word filtering traits.

### 5.3 Security & Performance

- Throttled authentication and OTP routes.
- Form Request validation for all submissions (e.g., 1–10 score range, date <3y).
- Cached supplier aggregates (1-hour TTL).
- Laravel Telescope for development inspection and Sentry for production error tracking.

---

## 6. Future Enhancements

- **Subscriptions**: Multi-tier access with Paddle integration (Free, Viewer, Team).
- **Profile Claiming**: Verified ownership for supplier profiles.
- **Analytics**: Dashboards summarizing submitted and received reviews, CSV exports.
- **Integrations**: CRM widgets, API connections, and PWA/mobile extension.
