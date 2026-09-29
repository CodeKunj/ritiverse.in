# RITIverse Granular Implementation Plan

This plan breaks down the project into very small, focused modules. This ensures high code quality, easier debugging, and a clear path from foundation to final polish.

## Phase 1: Foundation (Backend & Architecture)
**Goal:** Establish the technical skeleton, database, and security protocols.

*   **Module 1.1: Project Skeleton:** Create the MVC directory structure (`app`, `public`, `routes`, `views`), `.env` configuration loader, and the main `index.php` front-controller.
*   **Module 1.2: Database Schema:** Write SQL migration scripts for the core tables (`users`, `roles`, `pages`, `page_sections`, `settings`).
*   **Module 1.3: Core Backend Services:** Implement the PDO Database connection wrapper and a basic HTTP request/response routing engine.
*   **Module 1.4: Authentication Backend:** Build the user registration (seeder), secure password hashing, session handler, and CSRF protection logic.
*   **Module 1.5: Design Tokens:** Set up the global CSS variables (`--background`, `--accent`, etc.) and typography scale (Geist/Inter) in the main stylesheet.

## Phase 2: Public Website Shell (Frontend UI)
**Goal:** Build the static UI components and responsive layouts before connecting them to the database.

*   **Module 2.1: Global Layout:** Develop the responsive, sticky Navbar and the minimal Footer components.
*   **Module 2.2: Hero Section:** Build the two-column desktop Hero layout, ensuring the typography scale fluidly adapts to mobile.
*   **Module 2.3: Signature Admin Demo UI:** Create the interactive split-view component (Admin edit -> Live Preview) using vanilla JavaScript for the 5-second "wow" factor.
*   **Module 2.4: Feature Grids:** Implement the CSS capability Marquee and the premium Bento grid for Services.
*   **Module 2.5: Information Sections:** Build the Process timeline, Selected Work (Internal Demos) cards, Team layout, and FAQ accordion.
*   **Module 2.6: Forms & CTA:** Design the strong Final CTA section and the Contact/Lead form UI.

## Phase 3: Admin Dashboard Shell & Base CRUD
**Goal:** Build the secure CMS interface and basic data management.

*   **Module 3.1: Admin Authentication UI:** Build the Admin Login screen and implement the auth protection middleware for the `/admin` routes.
*   **Module 3.2: Admin UI Layout:** Create the admin dashboard shell (Sidebar, Topbar, premium RITIverse branding).
*   **Module 3.3: Settings Management:** Build the CRUD interface for global site settings (Company Name, SEO Defaults, Social Links).
*   **Module 3.4: Media Library:** Implement the backend file upload system, validation (type/size), and the admin gallery view.
*   **Module 3.5: Simple Content CRUD:** Build the admin management screens for the `Team` and `FAQ` database tables.

## Phase 4: Core Engine & Dynamic Frontend Integration
**Goal:** Connect the public website to the CMS and build the complex page builder.

*   **Module 4.1: Complex Content CRUD:** Build the admin management for `Services` and `Projects`.
*   **Module 4.2: Page Builder Engine (Backend):** Implement the logic to manage dynamic page sections (reordering, enabling/disabling sections).
*   **Module 4.3: Dynamic Frontend Integration (Part 1):** Connect the public Navbar, Hero, and Settings to fetch data dynamically from the database via Controllers.
*   **Module 4.4: Dynamic Frontend Integration (Part 2):** Connect the Services, Projects, Team, and FAQ frontend sections to their respective database models.

## Phase 5: Advanced Functionality
**Goal:** Implement the final, sophisticated features of the CMS.

*   **Module 5.1: Preview & Publish Flow:** Implement the Draft -> Preview -> Publish state management for pages.
*   **Module 5.2: Role-Based Access Control (RBAC):** Build the Roles & Permissions tables and enforce granular access checks in the admin middleware.
*   **Module 5.3: Activity Logging:** Build the background logging system and the Admin UI to view the activity audit trail.
*   **Module 5.4: Lead Management:** Connect the public contact form to the database and build the Admin view for submissions.

## Phase 6: Polish & Pre-Launch
**Goal:** Finalize performance, security, and aesthetics.

*   **Module 6.1: Animation Refinement:** Fine-tune the Hero fade-ups, hover lifts, and ensure the signature Admin interaction is flawless.
*   **Module 6.2: SEO & Accessibility:** Inject dynamic meta tags, audit for ARIA labels, keyboard navigation, and color contrast.
*   **Module 6.3: Optimization:** Optimize database queries, implement image lazy-loading, and clean up the asset bundle.
*   **Module 6.4: Acceptance Testing:** Run the final End-to-End test (Login -> Edit Hero -> Publish -> Verify Public Site) as defined in the requirements.
