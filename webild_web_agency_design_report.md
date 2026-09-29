# Webild Web Agency — Design & UI/UX Analysis Report

**Reference:** https://www.webild.io/templates/web-agency  
**Document type:** Design analysis / recreation specification  
**Style direction:** Premium modern digital agency

---

## 1. Executive Summary

The Webild Web Agency template follows a **premium, modern, editorial-style agency aesthetic**. Its visual identity is built around:

- Oversized modern typography
- Large whitespace and low visual density
- Light/off-white backgrounds with subtle blue-violet ambient glow
- Rounded white surfaces and cards
- Editorial photography
- Bento-style service layouts
- Floating statistics and trust indicators
- Work showcase carousel
- Team cards
- Restrained, purposeful motion

The overall design can be summarized as:

> **Minimal + Editorial + Creative Agency + Modern SaaS**

The strongest aspect of the design is not any single effect. The premium appearance comes from the combination of **typography, spacing, hierarchy, restrained color usage, strong imagery, and controlled motion**.

---

# 2. Overall Design Direction

## Design Personality

The website aims to feel:

- Clean
- Premium
- Modern
- Creative
- Trustworthy
- Professional
- Technology-oriented

It avoids an overly decorative agency style with excessive gradients, glassmorphism, animations, icons, or visual clutter.

### Core Formula

```text
Premium Agency Look
=
Big Typography
+
Large Whitespace
+
Neutral Base
+
One Strong Accent
+
Large Photography
+
Rounded Surfaces
+
Asymmetric Layout
+
Subtle Motion
```

The goal is **visual confidence rather than visual noise**.

---

# 3. Theme

## Primary Theme

**Light premium theme**

The visual system is based mainly on:

- Near-white / off-white background
- White content surfaces
- Black or near-black typography
- Gray secondary text
- Blue-violet / indigo accent

### Approximate Color Palette

> These are visual recreation values, not verified source CSS tokens.

| Role | Suggested Value | Purpose |
|---|---|---|
| Main background | `#F7F7FA` | Page background |
| Surface | `#FFFFFF` | Cards / content areas |
| Primary text | `#111111` | Headlines and important text |
| Secondary text | `#666B76` | Descriptions and metadata |
| Accent | `#5B4BFF` | CTA and highlights |
| Border | `#E7E7EC` | Card / section borders |

### Color Philosophy

Use the accent sparingly.

```text
Neutral background
       ↓
White surfaces
       ↓
Black typography
       ↓
Single accent color
```

Avoid multiple strong accent colors.

---

# 4. Background Treatment

The design benefits from a soft ambient gradient or radial glow rather than a flat background.

### Visual Concept

```text
Very light background
        +
soft blue/lavender glow
        +
white content surface
```

### Suggested CSS Direction

```css
background:
  radial-gradient(
    circle at 50% 20%,
    rgba(91, 75, 255, 0.10),
    transparent 60%
  ),
  #F7F7FA;
```

The gradient should remain subtle.

The background should provide **depth**, not become the focal point.

---

# 5. Page Frame / Main Container

The page feels more like a premium design showcase than a standard full-bleed website.

A large rounded content surface can be used inside the ambient background.

### Concept

```text
┌───────────────────────────────────────────┐
│                                           │
│   ┌───────────────────────────────────┐   │
│   │                                   │   │
│   │          WEBSITE CONTENT          │   │
│   │                                   │   │
│   └───────────────────────────────────┘   │
│                                           │
└───────────────────────────────────────────┘
```

### Suggested Values

```text
Maximum width: 1200–1400px
Outer padding: 24–48px
Main radius: 24–32px
```

---

# 6. Navigation

The navigation is intentionally simple.

### Recommended Structure

```text
Logo       Home   Services   Work   Contact      CTA
```

### Characteristics

- Minimal number of links
- Clear spacing
- Small/medium typography
- Strong but compact CTA
- No unnecessary secondary buttons
- Navigation should not compete with the hero

### Visual Principle

```text
Logo   →   Navigation   →   Primary Action
```

Keep the navigation calm and functional.

---

# 7. Hero Section

The hero is the primary visual anchor.

The structure follows a **two-column composition**:

```text
┌───────────────────────┬───────────────────────┐
│                       │                       │
│ Eyebrow               │                       │
│                       │       Large Image     │
│ Huge Headline         │                       │
│                       │   + Floating Stats    │
│ Supporting Text       │                       │
│                       │                       │
│ [Primary CTA]         │                       │
│ [Secondary CTA]       │                       │
│                       │                       │
└───────────────────────┴───────────────────────┘
```

The official Webild template description identifies a **vertical marquee**, **bento services**, **work showcase carousel**, and **team cards** as core parts of the template.

---

# 8. Hero Eyebrow

A small label appears above the main headline.

### Example

```text
AWARD-WINNING DIGITAL AGENCY
```

### Design Characteristics

- 12–14px
- Medium weight
- Uppercase or compact label styling
- Increased letter spacing
- Muted or accent color

The eyebrow provides context without taking visual attention away from the headline.

---

# 9. Hero Headline

The headline is the most important typographic element.

### Example Direction

```text
WE BUILD
DIGITAL
EXPERIENCES
```

### Suggested Typography

```text
Desktop:
64–88px

Weight:
600–700

Line-height:
0.90–1.05

Letter spacing:
Tight / slightly negative
```

### CSS Concept

```css
font-size: clamp(3.5rem, 6vw, 5.5rem);
line-height: 0.95;
font-weight: 700;
letter-spacing: -0.04em;
```

The large headline creates confidence and makes the page feel premium.

---

# 10. Typography System

The visual style fits a **modern grotesk / neo-grotesk sans-serif**.

The exact font used by the reference should not be assumed without source verification.

## Suitable Recreation Fonts

### Option A — Geist

Modern and highly suitable for technology-oriented agencies.

### Option B — Inter

Neutral, reliable, and highly readable.

### Option C — Manrope

More geometric and slightly more expressive.

### Option D — Satoshi

More design-oriented and editorial.

## Suggested Type Scale

| Element | Size | Weight |
|---|---:|---:|
| H1 | 64–88px | 600–700 |
| H2 | 48–64px | 600 |
| H3 | 24–32px | 600 |
| Body | 16–18px | 400 |
| Small text | 12–14px | 400–500 |
| Buttons | 14–16px | 500–600 |
| Navigation | 14–16px | 500 |

---

# 11. Hero Supporting Text

Supporting copy should remain compact.

### Recommended length

```text
2–3 lines
```

The hierarchy is:

```text
Headline = emotional / memorable
Supporting text = explanatory
CTA = action
```

Do not overload the hero with paragraphs.

---

# 12. CTA System

Use one visually dominant CTA and one secondary action.

### Example

```text
[ START PROJECT ]   View Work
```

## Primary CTA

- Filled accent background
- White text
- Pill shape
- Medium weight
- Compact padding

## Secondary CTA

- Text link or subtle outlined button
- Lower visual emphasis

### Suggested CSS

```css
padding: 12px 20px;
border-radius: 999px;
font-size: 14px;
font-weight: 600;
```

The goal is to create **one obvious action**.

---

# 13. Trust & Social Proof

The hero can include lightweight trust indicators using:

- Small avatars
- Client logos
- Short trust statement
- Project counts
- Client satisfaction metrics
- Experience figures

### Example

```text
○ ○ ○     Trusted by startups
          and established brands
```

This establishes credibility without requiring a large testimonial block immediately.

---

# 14. Hero Image Composition

The hero image is treated as a **design object**, not merely a rectangular image.

### Recommended characteristics

- Large image
- Rounded corners
- Strong crop
- High resolution
- Editorial photography
- Minimal background clutter
- Natural lighting
- Soft surrounding whitespace

The image should feel integrated into the layout.

---

# 15. Floating Statistics

Small cards can sit around the hero image.

### Example

```text
┌──────────────┐
│ 150+         │
│ Projects     │
└──────────────┘
```

Other useful metrics:

```text
98%
Client Satisfaction

12+
Years Experience
```

### Design Principle

These statistics work best as **visual annotations** around the image instead of a boring horizontal stats row.

---

# 16. Marquee

A marquee introduces motion and acts as a visual transition between major sections.

### Concept

```text
CLIENT A    CLIENT B    CLIENT C    CLIENT D
     ←──────── continuous movement ────────→
```

The reference template specifically highlights a **vertical marquee**.

### Implementation Direction

Use CSS animation whenever possible.

```css
animation:
  marquee 20s linear infinite;
```

The animation should be continuous and calm.

---

# 17. Services Section

The services area uses a **bento-inspired layout**.

Instead of displaying services in identical boxes, vary card sizes.

### Example

```text
┌───────────────────────┬───────────────┐
│                       │               │
│       WEB DESIGN      │ DEVELOPMENT   │
│                       │               │
├───────────────┬───────┴───────────────┤
│    BRANDING   │   DIGITAL STRATEGY    │
│               │                       │
└───────────────┴───────────────────────┘
```

### Why Bento Works

It creates:

- Visual hierarchy
- Rhythm
- Asymmetry
- More interesting scanning
- Better separation between services

---

# 18. Service Card Design

Recommended card style:

```text
Background: #FFFFFF
Border: 1px solid #E7E7EC
Radius: 20–28px
Shadow: None or extremely subtle
Padding: 24–40px
```

Cards should feel like **clean surfaces**, not floating Bootstrap components.

---

# 19. Portfolio / Work Showcase

The template uses a **work showcase carousel**.

### Structure

```text
SELECTED WORK

←

┌────────────────────────────────────┐
│                                    │
│            PROJECT IMAGE           │
│                                    │
└────────────────────────────────────┘

Project Name
Category / Year

                                    →
```

### Presentation Philosophy

Project imagery should dominate.

Metadata should remain small.

### Suggested Project Information

```text
Project Name
Category
Year
Short Result / Description
View Case Study →
```

Avoid overloading the project card with a long technology list.

---

# 20. Team Section

The template includes team cards.

### Recommended Structure

```text
              MEET THE TEAM

┌──────────┐   ┌──────────┐   ┌──────────┐
│          │   │          │   │          │
│  PHOTO   │   │  PHOTO   │   │  PHOTO   │
│          │   │          │   │          │
└──────────┘   └──────────┘   └──────────┘

Name            Name            Name
Role            Role            Role
```

### Design Direction

Use:

- Large photography
- Minimal metadata
- Neutral typography
- Rounded image surfaces

Do not over-design individual team cards.

---

# 21. Section Spacing

Whitespace is one of the major reasons the site feels premium.

### Suggested Vertical Rhythm

```text
Hero → Services        140–180px
Services → Work        160–200px
Work → Team            160–200px
Team → CTA             140–180px
```

A good starting range is:

```text
120–200px
```

between major content groups on desktop.

---

# 22. Border Radius System

Use a consistent rounded geometry.

### Suggested Radius Tokens

```text
Main container: 24–32px
Large image:    20–28px
Cards:          20–24px
Inputs:         14–18px
Buttons:        999px
Badges:         999px
```

The contrast between rounded cards and pill CTAs produces a coherent design language.

---

# 23. Iconography

Keep the iconography simple.

### Recommended

- Thin-line icons
- Monochrome
- Small arrows
- Minimal utility icons

Examples:

```text
→
↗
+
⌄
```

Avoid large colorful illustration-style icons unless the brand specifically requires them.

---

# 24. Motion Design

Motion should support hierarchy instead of becoming the main attraction.

## Recommended Animations

### Hero entrance

```text
opacity: 0 → 1
translateY: 20px → 0
```

### Cards

```text
translateY(-4px)
```

on hover.

### Images

```text
scale(1.00 → 1.02)
```

on hover.

### Marquee

```text
linear infinite
```

### Portfolio

Horizontal drag / scroll / carousel interaction.

Avoid excessive:

- Rotations
- Bounces
- Spins
- Large parallax effects
- Random floating animations

---

# 25. Image Direction

The photography should feel **editorial rather than corporate-stock**.

## Good Image Characteristics

- High resolution
- Natural lighting
- Real creative/working environments
- Muted or balanced colors
- Interesting composition
- Human interaction
- Minimal visual clutter

## Avoid

- Generic handshake imagery
- Obvious corporate stock photography
- Over-saturated images
- Excessive posing
- Low-resolution assets

---

# 26. Desktop Layout

Recommended desktop structure:

```text
┌──────────────────────────────────────────────────┐
│                       NAV                        │
├──────────────────────────────────────────────────┤
│                                                  │
│   TEXT AREA                  IMAGE AREA          │
│                                                  │
│   Eyebrow                    ┌──────────────┐    │
│                              │              │    │
│   HUGE                       │    IMAGE     │    │
│   HEADLINE                   │              │    │
│                              │              │    │
│   Description                └──────────────┘    │
│                                                  │
│   [ CTA ]   View Work                            │
│                                                  │
│   Social Proof                                  │
│                                                  │
├──────────────────────────────────────────────────┤
│                  MARQUEE                        │
└──────────────────────────────────────────────────┘
```

### Suggested Grid

```text
Desktop max width: 1200–1400px
Grid: 12 columns
Main gap: 24–32px
Outer padding: 32–48px
```

---

# 27. Responsive / Mobile Layout

Do not simply shrink the desktop design.

The mobile structure should become:

```text
NAV
 ↓
EYEBROW
 ↓
HEADLINE
 ↓
DESCRIPTION
 ↓
CTA
 ↓
IMAGE
 ↓
STATS
 ↓
MARQUEE
 ↓
SERVICES
 ↓
WORK
 ↓
TEAM
 ↓
CONTACT
 ↓
FOOTER
```

## Mobile Rules

- Hero becomes one column
- Bento cards become one-column or compact two-column layouts
- Portfolio becomes horizontal swipe / scroll
- Team becomes stacked or horizontally scrollable
- CTA buttons may stack
- Typography scales smoothly with `clamp()`

---

# 28. Responsive Breakpoint Strategy

Suggested breakpoints:

```text
Mobile:  < 640px
Tablet:  640–1024px
Desktop: > 1024px
Large:   > 1280px
```

### Desktop

```text
2-column hero
Large bento grid
Large images
3–4 team cards
```

### Tablet

```text
2-column or compressed hero
Simplified bento
2-column team
```

### Mobile

```text
1-column hero
1-column cards
Horizontal work carousel
Stacked CTAs
```

---

# 29. Spacing Scale

A consistent spacing system will help reproduce the visual rhythm.

Suggested token scale:

```text
4px
8px
12px
16px
24px
32px
48px
64px
80px
96px
120px
160px
200px
```

Use the smaller values inside components and the larger values between sections.

---

# 30. Design Tokens

Example:

```css
:root {
  --background: #F7F7FA;
  --surface: #FFFFFF;
  --foreground: #111111;
  --muted: #666B76;
  --accent: #5B4BFF;
  --border: #E7E7EC;

  --radius-sm: 14px;
  --radius-md: 20px;
  --radius-lg: 28px;
  --radius-pill: 999px;

  --container: 1280px;
}
```

These are suggested recreation tokens.

---

# 31. Component Architecture for Next.js / React

Recommended structure:

```text
app/
├── page.tsx
│
├── components/
│   ├── Navbar.tsx
│   ├── Hero.tsx
│   ├── TrustBar.tsx
│   ├── Marquee.tsx
│   ├── ServicesBento.tsx
│   ├── ServiceCard.tsx
│   ├── WorkShowcase.tsx
│   ├── ProjectCard.tsx
│   ├── TeamSection.tsx
│   ├── TeamCard.tsx
│   ├── CTASection.tsx
│   └── Footer.tsx
│
└── lib/
    └── data.ts
```

---

# 32. Data-Driven Content

For projects, services, and team members, use structured data rather than hardcoding repeated markup.

### Example

```ts
const projects = [
  {
    title: "Project Name",
    category: "Web Design",
    year: "2026",
    image: "/projects/project-1.webp",
  },
];
```

This makes it easier to:

- Add projects
- Create a CMS later
- Build a carousel
- Reuse card components
- Keep the code maintainable

---

# 33. Recommended Animation Stack

For a modern implementation:

```text
Framer Motion
+
Lenis
+
CSS transitions
```

## Framer Motion

Use for:

- Section reveal
- Hero entrance
- Card animation
- Image interactions
- Page transitions

## Lenis

Use for:

- Smooth page scrolling

## CSS

Use for:

- Hover states
- Marquee
- Opacity
- Scale
- Small transforms

Do not make every visual transition dependent on JavaScript.

---

# 34. UX Principles Behind the Design

The design prioritizes:

### 1. Immediate positioning

The user should understand what the agency does almost instantly.

### 2. Visual confidence

Large typography establishes authority.

### 3. Proof

Statistics and trust indicators reduce uncertainty.

### 4. Exploration

The work carousel encourages users to investigate projects.

### 5. Human presence

Team imagery makes the agency feel real.

### 6. Clear conversion

A strong CTA remains visible without becoming aggressive.

---

# 35. What Creates the Premium Feel?

The premium appearance comes mainly from these factors:

## Typography

Large, confident type.

## Whitespace

The page is not crowded.

## Restrained colors

Mostly neutrals plus one accent.

## Large imagery

Images get enough space to become visual anchors.

## Asymmetry

Not everything is forced into identical boxes.

## Hierarchy

Every section has a clear focal point.

## Controlled motion

Animation adds energy without causing visual chaos.

---

# 36. What Not to Add

Avoid the common mistake of adding too many design trends at once.

Do not combine:

```text
10 gradient blobs
+
3 font families
+
20 hover effects
+
glassmorphism
+
neon colors
+
huge shadows
+
random floating shapes
+
multiple CTA styles
```

The aesthetic works because the system is **controlled**.

### Premium does not mean more effects.

It means **better hierarchy and better restraint**.

---

# 37. Recommended Final Visual System

```text
STYLE
Modern premium digital agency

BACKGROUND
Off-white / light lavender

SURFACES
White

TEXT
Near-black

SECONDARY TEXT
Muted gray

ACCENT
Indigo / blue-violet

FONT
Geist / Inter / Manrope / Satoshi

H1
64–88px

H2
48–64px

BODY
16–18px

RADIUS
20–32px

CTA
Pill

LAYOUT
12-column / asymmetric

SERVICES
Bento

WORK
Carousel

TRUST
Stats + avatars/logos

MOTION
Marquee + subtle micro-interactions
```

---

# 38. Complete Page Wireframe

```text
┌──────────────────────────────────────────────┐
│                    NAVBAR                    │
│ Logo   Home Services Work Contact      CTA   │
├──────────────────────────────────────────────┤
│                                              │
│                     HERO                     │
│                                              │
│  EYEBROW                     ┌────────────┐  │
│                              │            │  │
│  WE BUILD                    │            │  │
│  DIGITAL                     │   IMAGE    │  │
│  EXPERIENCES                 │            │  │
│                              │            │  │
│  Supporting copy             └────────────┘  │
│                                              │
│  [START PROJECT] [VIEW WORK]                 │
│                                              │
│  Trust / social proof                        │
│                                              │
├──────────────────────────────────────────────┤
│                BRAND MARQUEE                 │
├──────────────────────────────────────────────┤
│                                              │
│                   SERVICES                   │
│                                              │
│     ┌────────────────┬──────────────┐        │
│     │                │              │        │
│     │ WEB DESIGN     │ DEVELOPMENT  │        │
│     │                │              │        │
│     ├─────────┬──────┴──────────────┤        │
│     │ BRAND   │ DIGITAL STRATEGY   │        │
│     └─────────┴────────────────────┘        │
│                                              │
├──────────────────────────────────────────────┤
│                SELECTED WORK                │
│                                              │
│        ←   PROJECT IMAGE   →                │
│                                              │
│              Project Name                    │
│              Category / Year                 │
│                                              │
├──────────────────────────────────────────────┤
│                     TEAM                    │
│                                              │
│      [PHOTO]    [PHOTO]     [PHOTO]         │
│       Name       Name        Name            │
│       Role       Role        Role            │
│                                              │
├──────────────────────────────────────────────┤
│                                              │
│                LET'S WORK                   │
│                                              │
│           Have a project in mind?           │
│                                              │
│              [GET IN TOUCH →]               │
│                                              │
├──────────────────────────────────────────────┤
│                   FOOTER                    │
└──────────────────────────────────────────────┘
```

---

# 39. One-Sentence Design Description

> **A minimalist digital-agency website combining oversized editorial typography, soft lavender ambient backgrounds, rounded white surfaces, editorial photography, bento layouts, floating metrics, and restrained motion.**

---

# 40. Final Design Takeaway

The reference succeeds because it does not rely on a huge number of visual effects.

Its design system follows a simple philosophy:

```text
Less visual noise
        ↓
Better hierarchy
        ↓
More whitespace
        ↓
Stronger typography
        ↓
Better imagery
        ↓
More premium perception
```

The key lesson for a recreation is:

> **Do not copy the individual effects. Reproduce the visual discipline behind them.**

---

## Reference

- Webild — Web Agency Template: https://www.webild.io/templates/web-agency
