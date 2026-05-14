---
name: Executive Minimalist
colors:
  surface: '#111415'
  surface-dim: '#111415'
  surface-bright: '#373a3b'
  surface-container-lowest: '#0c0f10'
  surface-container-low: '#191c1d'
  surface-container: '#1d2021'
  surface-container-high: '#282a2b'
  surface-container-highest: '#323536'
  on-surface: '#e1e3e4'
  on-surface-variant: '#d0c5af'
  inverse-surface: '#e1e3e4'
  inverse-on-surface: '#2e3132'
  outline: '#99907c'
  outline-variant: '#4d4635'
  surface-tint: '#e9c349'
  primary: '#f2ca50'
  on-primary: '#3c2f00'
  primary-container: '#d4af37'
  on-primary-container: '#554300'
  inverse-primary: '#735c00'
  secondary: '#c6c6c9'
  on-secondary: '#2f3133'
  secondary-container: '#454749'
  on-secondary-container: '#b4b5b7'
  tertiary: '#c9cfd6'
  on-tertiary: '#2b3137'
  tertiary-container: '#adb3bb'
  on-tertiary-container: '#40464c'
  error: '#ffb4ab'
  on-error: '#690005'
  error-container: '#93000a'
  on-error-container: '#ffdad6'
  primary-fixed: '#ffe088'
  primary-fixed-dim: '#e9c349'
  on-primary-fixed: '#241a00'
  on-primary-fixed-variant: '#574500'
  secondary-fixed: '#e2e2e5'
  secondary-fixed-dim: '#c6c6c9'
  on-secondary-fixed: '#1a1c1e'
  on-secondary-fixed-variant: '#454749'
  tertiary-fixed: '#dde3eb'
  tertiary-fixed-dim: '#c1c7cf'
  on-tertiary-fixed: '#161c22'
  on-tertiary-fixed-variant: '#41474e'
  background: '#111415'
  on-background: '#e1e3e4'
  surface-variant: '#323536'
typography:
  display-lg:
    fontFamily: Bodoni Moda
    fontSize: 64px
    fontWeight: '700'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: Bodoni Moda
    fontSize: 40px
    fontWeight: '700'
    lineHeight: '1.2'
    letterSpacing: -0.01em
  headline-lg:
    fontFamily: Bodoni Moda
    fontSize: 48px
    fontWeight: '600'
    lineHeight: '1.2'
  headline-md:
    fontFamily: Bodoni Moda
    fontSize: 32px
    fontWeight: '500'
    lineHeight: '1.3'
  body-lg:
    fontFamily: Hanken Grotesk
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Hanken Grotesk
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
  label-md:
    fontFamily: Hanken Grotesk
    fontSize: 14px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: 0.05em
  label-sm:
    fontFamily: Hanken Grotesk
    fontSize: 12px
    fontWeight: '500'
    lineHeight: '1.2'
    letterSpacing: 0.02em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base: 8px
  container-max: 1280px
  gutter: 24px
  margin-mobile: 20px
  section-gap-desktop: 120px
  section-gap-mobile: 64px
---

## Brand & Style
The design system embodies the "Quiet Luxury" of high-end digital consulting. It is built on a foundation of **Minimalism** and **Editorial Design**, prioritizing clarity, intentionality, and a sense of effortless authority. The aesthetic targets a high-tier B2B audience, evoking an emotional response of trust, exclusivity, and precision.

Key pillars include:
- **Spatial Discipline:** Generous use of white space to isolate key messages and reduce cognitive load.
- **Architectural Structure:** A strict adherence to grid systems to convey stability.
- **Micro-interactions:** Subtle, low-friction transitions that feel fluid rather than flashy.

## Colors
The palette is designed to function primarily in a high-contrast dark environment for maximum impact, while maintaining a refined light-mode alternative.

- **Primary (Gold):** Used sparingly for high-intent actions, accents, and critical emphasis. It represents the "premium" value proposition.
- **Secondary (Charcoal/Navy):** The canvas. In dark mode, it provides depth; in light mode, it acts as the primary text color.
- **Tertiary (Slate/Grey):** Used for borders, disabled states, and secondary information to maintain hierarchy without adding visual noise.
- **Neutral:** A spectrum of off-whites and cool greys used for readability and background layering.

## Typography
The typographic strategy relies on the tension between the classic, high-contrast serif and the sharp, contemporary sans-serif.

- **Headlines:** Use `Bodoni Moda` for all H1-H3 elements. Ensure "Optical Sizing" is active if available to maintain hair-line strokes at large sizes.
- **Body:** `Hanken Grotesk` provides a clean, neutral balance to the serif. Use wide line-heights (1.6) to improve legibility and reinforce the "airy" brand feel.
- **Labels:** Small caps or uppercase with increased letter spacing should be used for category labels and overlines to add a sense of meticulous detailing.

## Layout & Spacing
The layout follows a **Fixed-Width Grid** on desktop and a **Fluid Grid** on mobile.

- **Grid:** 12 columns for desktop (centered), 4 columns for mobile. 
- **Rhythm:** An 8px linear scale. Section spacing is intentionally oversized to create "moments of silence" between case studies or services.
- **Verticality:** Use large top-paddings for headers to push content down the fold, creating an editorial, "un-crowded" entry point.

## Elevation & Depth
Depth is created through **Tonal Layering** and **Low-Contrast Outlines** rather than heavy shadows.

- **Surfaces:** Use subtle shifts in charcoal (e.g., from #1A1C1E to #232629) to indicate nested components or cards.
- **Borders:** 1px solid lines in Slate with low opacity (20-30%) define structure without creating visual barriers.
- **Shadows:** If used, they must be "Ambient" — extremely diffused (40px+ blur), low opacity (10%), and matching the background hue (tinted charcoal) to avoid a "dirty" look.

## Shapes
Shapes are **Soft** but disciplined. 

- **Primary Radius:** 0.25rem (4px) for small elements like inputs and buttons. This maintains a professional, "sharp" appearance while removing the harshness of 0px corners.
- **Large Containers:** Cards and images may use up to 0.75rem (12px) to provide a modern containerized feel.
- **Icons:** Use thin-stroke (1px or 1.5px) vector icons to match the weight of the sans-serif body text.

## Components
- **Buttons:** Primary buttons use a solid Gold background with Navy text. Secondary buttons are "Ghost" style with a 1px Slate border. All buttons utilize a subtle width-expansion or color-fill transition on hover.
- **Input Fields:** Bottom-border only or very light Slate outlines. Labels are always `label-md` (uppercase) positioned above the field.
- **Cards:** No shadows. Use a 1px border or a slightly lighter background shade than the main canvas. Image-to-text ratio should favor the image.
- **Chips/Badges:** Small, rectangular with the 0.25rem radius. Used for "Service Categories" or "Project Tags."
- **Lists:** Bullet points are replaced by thin 8px horizontal gold lines to maintain the architectural theme.
- **Navigation:** A minimal top bar with high transparency and a backdrop-blur. The logo is the anchor; links are `label-sm` with active states indicated by a gold dot underneath.