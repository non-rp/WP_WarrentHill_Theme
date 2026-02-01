# WarrentHill Theme

A custom **WordPress theme** built on top of the _Underscores_ starter theme and enhanced with support for the **Advanced Custom Fields (ACF)** plugin.

This theme provides a flexible, extendable foundation for building modern WordPress sites with dynamic content and modular components.

---

## 🧠 Overview

WarrentHill is a fully customizable WordPress theme designed for developers who want a solid base with support for:

- Semantic template structure
- Modern CSS and JavaScript tooling
- ACF-powered custom layouts and fields
- Clean markup and extensible PHP functions

---

## 📦 Features

✔ Custom theme structure compatible with _Underscores_  
✔ ACF flexible content integration  
✔ Componentized template parts  
✔ Pre-configured assets build system (JS / CSS)  
✔ WordPress coding standards supported

---

## 🚀 Getting Started

### Requirements

Before using or developing with this theme, make sure you have:

✔ WordPress 5.0 or higher  
✔ PHP 7.4+  
✔ Node.js & NPM for asset tooling (optional)  
✔ Advanced Custom Fields plugin (free or Pro)

---

### Installation

1. **Clone the repository:**
```bash
   git clone https://github.com/non-rp/WarrentHill_Theme.git
```

2. Add to WordPress:

Place the folder inside wp-content/themes/

3. Activate the theme:

From WP Admin → Appearance → Themes → Activate WarrentHill Theme

### Development

If you plan to edit styles or scripts:

Install Dependencies

```bash
   npm install
```

Build assets

```bash
   npm run build
```

Watch for changes

```bash
   npm run dev
```

### Structure

/assets/           – JS / CSS source files
/inc/              – PHP includes (helpers, theme support)
/js/               – Compiled JavaScript
/template-parts/   – Modular theme templates
style.css          – Theme style file
functions.php      – Theme functions and hooks

### License

This project is licensed under the GPL-2.0 License — see the LICENSE file for details.





