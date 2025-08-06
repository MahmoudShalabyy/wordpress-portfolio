

# Portfolio Website with Projects – WordPress Lab

This is a WordPress-based portfolio website developed as part of a practical lab. It includes:

* A custom post type called Projects.
* Custom fields (Client Name, URL, Completion Date, Technology).
* A dynamic portfolio display using shortcode.
* A working contact form using Contact Form 7.
* Mobile-responsive design based on Astra Theme.

---

##  Project Structure

📁 portfolio-projects
→ Custom plugin to register "Projects" CPT and meta boxes.

📁 screenshots
→ Contains full-page screenshots:

* home.png
* portfolio.png
* project-single.png
* contact.png

📄 README.md
→ This file.

---

##  Installation Steps

1. Clone or download the repository into your local WordPress installation:

   Place the plugin folder here:

   ```
   wp-content/plugins/portfolio-projects
   ```

2. Activate the plugin from WordPress admin → Plugins.

3. Add at least 5 Projects from the "Projects" section with all custom fields filled.

4. Create a page called "Portfolio" and add this shortcode:

   ```
   [projects_list]
   ```

5. Install Contact Form 7 plugin and create a contact form.
   Paste the shortcode into the "Contact" page.

6. Make sure the theme is Astra and customize fonts, colors, and logo as needed.

---

##  Screenshots Guide

* Use GoFullPage (Chrome extension) to capture full screenshots.
* Save them in a folder named screenshots with the exact names:

  * home.png
  * portfolio.png
  * project-single.png
  * contact.png

Link: [https://chrome.google.com/webstore/detail/gofullpage-full-page-scre/fdpohaocaechififmbbbbbknoalclacl](https://chrome.google.com/webstore/detail/gofullpage-full-page-scre/fdpohaocaechififmbbbbbknoalclacl)

---

##  References

* Astra Theme: [https://wpastra.com](https://wpastra.com)
* register\_post\_type() Docs: [https://developer.wordpress.org/reference/functions/register\_post\_type/](https://developer.wordpress.org/reference/functions/register_post_type/)
* Meta Boxes Docs: [https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/](https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/)
* Contact Form 7: [https://contactform7.com/](https://contactform7.com/)
* Fullpage Screenshot Tool: [https://gofullpage.com/](https://gofullpage.com/)




