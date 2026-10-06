import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Remove the old :has() rules
content = re.sub(r'/\* CTA Area Linked Hover Effect \*/.*?\}', '', content, flags=re.DOTALL)

# Append new :hover rules
append_css = """
/* CTA Area Linked Hover Effect */
.cta-links-area:hover .btn-solid {
  background-color: var(--clr-main) !important;
  border-color: var(--clr-main) !important;
}
.cta-links-area:hover .btn-outline {
  background-color: var(--clr-secondary) !important;
  border-color: var(--clr-secondary) !important;
}
"""

content += append_css

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated to parent hover")
