# Archive & Resist Conclave 2026 - Official Website

This repository contains the custom WordPress theme and source code for the **Archive & Resist Conclave 2026** website. The site serves as the central hub for the event, featuring a dynamic schedule, speaker profiles, and an immersive user experience designed to reflect the themes of justice, documentation, and resistance.

## 🚀 Project Overview

* **Event:** Archive & Resist Conclave 2026
* **Location:** BRAC University, Dhaka
* **Tech Stack:** WordPress (Custom Theme), PHP, HTML5, CSS3, JavaScript (Vanilla)
* **Design Style:** Brutalist / Poster-Style / High Contrast

## ✨ Key Features

### 1. Dynamic Sessions & Schedule

* **Custom PHP Templates:** A fully custom `sessions.php` template that sorts sessions by Day 1, Day 2, and Parallel/Ongoing tracks.
* **Smart Badge Logic:** PHP logic automatically assigns color-coded badges (e.g., Red for Plenary, Blue for Workshop) based on the session type.
* **Full-Width "Hero" Sessions:** Special handling for ongoing events (like art exhibitions) that span multiple days.

### 2. Interactive Animations (Micro-interactions)

* **Scroll Reveal:** Elements smoothly slide up and fade in as the user scrolls down using the Intersection Observer API.
* **Tactile Hover Effects:** 3D lift and shadow expansion on cards to mimic physical posters.
* **Shimmer Effect:** A CSS-only light beam animation on featured cards to draw attention without using heavy video assets.

### 3. Responsive Design

* **Mobile First:** Optimized for seamless "swipe" navigation on mobile and "hover" interactions on desktop.
* **CSS Grid & Flexbox:** Robust layouts for Speaker and Partner grids that adapt from 4 columns on desktop to 1 or 2 on mobile.

## 📂 Folder Structure

```text
/wp-content/themes/archive-resist-theme/
├── index.php             # Main homepage template (Slider & Highlights)
├── style.css             # Main stylesheet (Variables, Typography, Animations)
├── sessions.php          # Custom template for the Full Schedule page
├── header.php            # Global header & Navigation
├── footer.php            # Global footer
├── functions.php         # WordPress theme setup & enqueues
└── /images/              # Asset directory
    ├── /avatar/          # Speaker profile images
    └── /partner/         # Partner and organizer logos
```

## 🛠️ Installation & Setup

1. **Download the Theme**
   Clone this repository into your WordPress themes directory:

   `/wp-content/themes/`

2. **Activate**
   Go to the WordPress Dashboard → **Appearance → Themes** and activate **Archive & Resist Theme**.

3. **Page Setup**

   * Create a new page named **"Sessions"**.
   * In the **Page Attributes** section (right sidebar), select **"Sessions Page"** from the Template dropdown.

4. **Permalinks**
   Go to **Settings → Permalinks** and click **"Save Changes"** to flush the rewrite rules.

## 🎨 Design System

### Fonts

* **Display:** Barlow Semi Condensed (Bold, Uppercase)
* **Body:** Inter (Clean, Readable)

### Color Palette

* `--c-archive` (Blue)
* `--c-resist` (Red)
* `--c-conclave` (Green)

### Backgrounds

* Beige / paper-like textures for a raw archival feel.

## 🤝 Contribution

1. Fork the repository.
2. Create your feature branch:
   `git checkout -b feature/AmazingFeature`
3. Commit your changes:
   `git commit -m 'Add some AmazingFeature'`
4. Push to the branch:
   `git push origin feature/AmazingFeature`
5. Open a Pull Request.

---

Built for the **Archive & Resist Conclave 2026**.
