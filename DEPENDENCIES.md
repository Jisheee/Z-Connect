# ZConnect - Project Dependencies

This file outlines the necessary dependencies, libraries, and tools required to run, develop, and maintain the ZConnect website project.

## 1. Environment Requirements
To run this project locally, you will need a local PHP server environment.
- **PHP 7.4 or higher**: Required for running the `.php` template files and includes (`header-section.php`, `footer-section.php`, etc.).
- **Local Web Server**: 
  - macOS: [MAMP](https://www.mamp.info/) or Laravel Valet
  - Windows: [XAMPP](https://www.apachefriends.org/) or [WampServer](https://www.wampserver.com/)
  - Alternatively, you can run the built-in PHP server from the terminal:
    ```bash
    php -S localhost:8000
    ```

## 2. Frontend Libraries (Included via CDN)
The following libraries are used for styling and animations. They are already included via CDN links in the `inc/header-section.php` and `inc/footer-section.php` files, so no `npm install` is strictly necessary unless you plan to bundle them in the future.

- **Bootstrap 5.x**: Used for the grid system and responsive utility classes.
- **FontAwesome 5.x**: Used for icons across the site.
- **Swiper.js**: Used for carousels and sliders (e.g., the services section).
- **GSAP (GreenSock Animation Platform)**: Used heavily for the custom hero scroll animation (`js/hero-scroll.js`).
  - Core GSAP (`gsap.min.js`)
  - ScrollTrigger Plugin (`ScrollTrigger.min.js`)

## 3. Python Scripts (Optional Tooling)
There is a utility script included (`process_logos.py`) used for programmatically removing backgrounds and converting logo colors. If a future developer needs to run this script to process new client logos, they must install the required Python dependencies.

- **Python 3.x**
- **Pillow (PIL)**: Python Imaging Library used for image manipulation.
  
  **Installation:**
  ```bash
  pip3 install Pillow
  ```
  **Usage:**
  ```bash
  python3 process_logos.py
  ```

## 4. Custom Assets
- **CSS**: Custom styles are located in `css/style.css` and `css/hero-scroll.css`.
- **JS**: Custom scripts are located in `js/main.js` and `js/hero-scroll.js`.
- **Images/Videos**: Located in `assets/images-zconnect/`.

---
*Note: This is a static/PHP-include based project. There is currently no Node.js build step (like Webpack or Vite) required to compile assets.*
