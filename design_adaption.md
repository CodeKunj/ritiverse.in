# RITIverse — Design Adaptation Report **Based on:** Webild Web Agency template analysis\ **Business:** RITIverse — custom software, websites, apps, ERP & CRM\ **Core selling point:** an admin panel where the client can change *anything* --- ## 1. Verdict Webild's design is a strong base, but it is built for a **creative agency** (editorial photos, "award-winning", team portraits). RITIverse is a **software company** whose proof is *product*, not photography. **Keep the discipline** — big type, whitespace, neutral base + one accent, rounded surfaces, bento layout, restrained motion.\ **Change the content** — replace lifestyle photos with admin-panel UI, replace client logos with capability proof, and make the admin panel the star of the page. > One-line strategy: **"Same calm, premium layout — but every big visual is the product you sell."** --- ## 2. What to Borrow vs. Change | Webild element | Keep / Change | RITIverse version | | --- | --- | --- | | Light theme, ambient glow, white cards | **Keep** | Same system, RITIverse accent | | Oversized headline | **Keep** | Benefit-led, not "we build experiences" | | Hero photo | **Change** | Live admin-panel mockup / interactive demo | | Floating stats | **Adapt** | Floating "edit → live" action cards | | Vertical marquee | **Adapt** | Scrolling list of *things you can change* | | Bento services | **Keep** | Admin Panel = the largest tile | | Work carousel | **Adapt** | Case studies showing site + its admin panel | | Team cards | **Keep, smaller** | Founders + real people only | | Client-logo trust | **Change** | Guarantees (code ownership, roles, support) until real logos exist | | — | **Add** | Admin-panel deep-dive, Process, FAQ | --- ## 3. Positioning & Messaging The name **RITIverse** suggests an ecosystem. Use it: *website, app, ERP and CRM all managed from one control panel.* **Hero headline options (pick one):** 1. **Build once. Change anything.** 2. **Your business. One control panel.** 3. **Software you can actually run yourself.** **Eyebrow:** CUSTOM SOFTWARE · WEBSITES · APPS · ERP · CRM **Supporting text:** *We build websites, apps, ERP and CRM systems with an admin panel that lets you edit content, prices, users and workflows yourself — no developer tickets, no waiting.* **CTAs:** Primary **Try the admin demo** · Secondary **See our work** The problem you solve (use it in copy): *most clients are stuck paying a developer for every small change.* --- ## 4. Hero Design
text
┌───────────────────────────┬───────────────────────────┐
│ EYEBROW                   │  ┌─────────────────────┐  │
│ Build once.               │  │  ADMIN PANEL UI     │  │
│ Change anything.          │  │  (real mockup)      │  │
│                           │  └─────────────────────┘  │
│ Supporting text           │   ▢ Price updated · live  │
│ [Try the admin demo]      │   ▢ New role added        │
│ View work                 │   ▢ Banner changed · 2s   │
│ Trust: 3 guarantees       │                           │
└───────────────────────────┴───────────────────────────┘
**Signature interaction (your differentiator):** a split preview — toggle a setting or edit a headline in the mini admin panel and the website preview beside it updates instantly. This shows the selling point in 5 seconds instead of describing it. **Floating cards** replace Webild's stat cards. Use real actions, not fake numbers. --- ## 5. The Admin Panel Section (most important section) Place it **directly after the hero/marquee** — before services. **Title:** *"Everything on your site, editable by you."* Layout: large product screenshot/demo on one side, 4–6 short capability blocks on the other: - **Edit anything** — pages, prices, menus, banners, forms - **Roles & permissions** — control who can change what - **Live preview** — see changes before publishing - **Activity log & undo** — every change tracked and reversible - **Reports & exports** — data in your hands - **Works across products** — site, app, ERP, CRM from one place **Conversion tool:** a public **demo login** (sandbox) — "Try it yourself, no signup." This is the strongest CTA you can have. --- ## 6. Services Bento Admin Panel is the hero tile because it ships with *every* service.
text
┌───────────────────────────┬──────────────┐
│ ADMIN PANEL  (large)      │ CRM          │
│ mini live demo            ├──────────────┤
│                           │ ERP          │
├────────────┬──────────────┼──────────────┤
│ Websites   │ Web & Mobile │ Custom       │
│            │ Apps         │ Software     │
└────────────┴──────────────┴──────────────┘
Each tile: title, one benefit line, small "↗" link. End every tile with **"Includes admin panel."** --- ## 7. Proof When You Are New Do not copy Webild's "150+ projects" style numbers unless they are true. | Instead of… | Use… | | --- | --- | | Client logos | Guarantees: *You own the code · You own your data · Role-based access · Post-launch support* | | Award badges | Tech/security badges you genuinely have | | Large case-study list | 2–3 case studies or **concept demos** (a demo CRM, demo ERP) | | Team hero photo | Founder photos + short "why we started RITIverse" | **Case-study card:** project image (site) + admin screenshot, name, category, one-line result, "View case study →". Format: *"Before: needed a developer for edits. After: client updates it in minutes."* --- ## 8. Visual System for RITIverse Keep Webild's structure, but use **your own accent** so you do not look like a template clone.
css
:root {
  --background: #F7F7FB;
  --surface:    #FFFFFF;
  --foreground: #0F1020;
  --muted:      #63677A;
  --accent:     #FD6D00;   /* RITIverse Eagle Flame Orange */
  --accent-red: #CF0000;   /* RITIverse Eagle Crimson Red */
  --border:     #E5E7EB;
  --success:    #10B981;   /* only inside admin-panel UI status chips */
  --radius-md:  18px;
  --radius-lg:  26px;
  --radius-pill: 999px;
}
- **Fonts:** Geist or Inter for text, plus a mono font (Geist Mono) for small admin/technical details. - **Headline:** clamp(3rem, 5.5vw, 5rem), weight 700, tracking -0.04em. - **One dark band (optional):** a dark section behind the admin demo adds contrast; keep everything else light. - **Images:** product UI and real people. No handshake stock photos. - **Spacing:** 120–180px between major sections on desktop, as in Webild. **Design tip:** build the admin panel with the *same tokens* as the marketing site. The site and the product then feel like one system — which is itself a selling point. --- ## 9. Recommended Page Structure
text
1. Navbar        Logo · Solutions · Admin Panel · Work · Process · Contact · [Book a demo]
2. Hero          Headline + admin mockup + floating action cards
3. Marquee       "You can change: prices · pages · users · invoices · menus · roles…"
4. Admin Panel   Deep-dive + interactive demo  ← main section
5. Services      Bento (Admin Panel = largest tile)
6. Work          Case studies / concept demos (carousel)
7. Process       Discover → Design → Build + Admin → Handover & Support
8. Team          Founders, real photos
9. FAQ           "Can I change everything?" "Who owns the code?" "What about support?"
10. CTA          "Have a project in mind?" [Try the demo] [Talk to us]
11. Footer
Nav stays minimal (as in Webild), one strong CTA. --- ## 10. Motion (keep it Webild-restrained) - Hero fade-up on load; card hover lift -4px - Vertical marquee for the "things you can change" list - **One** meaningful animation: the admin-edit → live-site update - Avoid parallax, bounces, and random floating shapes --- ## 11. Build Approach - **Stack:** Next.js + Tailwind + Framer Motion (as in your Webild report) - **Data-driven content:** services, projects, FAQ, team in structured data - **Dogfood it:** make **your own website editable from a RITIverse admin panel**. Then you can tell prospects: *"This site you're viewing is managed by the same admin panel we'd build for you."* - **Mobile first:** many visitors will arrive on phones — hero stacks to one column, demo stays tappable, portfolio swipes horizontally --- ## 12. Do & Don't **Do** - Lead with the admin panel in copy and visuals - Use only true numbers and clients - Recreate the *discipline* of the design, not the template **Don't** - Reuse Webild's images, copy, or code — build your own version of the system - Call yourself "award-winning" or show fake metrics - Add extra accent colors, gradients, or effects - Hide pricing/engagement model completely — say how projects start (e.g., discovery call → proposal) --- ## 13. Next Steps 1. **Finalize positioning** — choose headline and 3 guarantees 2. **Build the admin demo** — even a simple sandbox with 5–6 editable things 3. **Set tokens & logo colors** — confirm accent, fonts 4. **Design hero + admin section first** — these carry the sale 5. **Prepare 2–3 case studies or concept demos** 6. **Build site on RITIverse's own admin panel**, then launch i ahve generated this for my business website which i have to build in php your work is to rate this websoite design for my business for my business you can reffer the document also i want to add bout my business it our main seloing point us admin panel fro that user cna change anything onthe website just telling