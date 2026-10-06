import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Remove the parent hover block
content = re.sub(r'/\* CTA Area Linked Hover Effect - Parent Trigger \*/.*?(?=\n\n|\Z)', '', content, flags=re.DOTALL)

# Add Option 2 logic, with protection for single buttons
option2_block = '''
/* CTA Area Linked Hover Effect - Option 2 */
/* Hover Left: Left becomes Blue (native), Right becomes Green */
.cta-links-area:has(.btn-solid:hover) .btn-outline {
  background-color: var(--clr-secondary) !important;
  border-color: var(--clr-secondary) !important;
}

/* Hover Right: Right becomes Dark Blue (ONLY if it's next to a solid button) */
.cta-links-area:has(.btn-solid) .btn-outline:hover {
  background-color: #0a527c !important;
  border-color: #0a527c !important;
}

/* Fast transitions to prevent getting stuck */
.cta-links-area .btn-solid, .cta-links-area .btn-outline {
  transition: background-color 0.05s ease, border-color 0.05s ease, transform 0.3s ease !important;
}
'''

content += option2_block

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Option 2 applied")
