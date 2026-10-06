import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace the linked hover blocks
old_block = r'''/\* CTA Area Linked Hover Effect - Specific target hover \*/
\.cta-links-area:has\(\.btn-outline:hover\) \.btn-solid \{.*?\}
\.cta-links-area:has\(\.btn-solid:hover\) \.btn-outline \{.*?\}
\.cta-links-area \.btn-solid, \.cta-links-area \.btn-outline \{.*?\}'''

new_block = '''/* CTA Area Linked Hover Effect - Specific target hover */
.cta-links-area:has(.btn-outline:hover) .btn-solid {
  background-color: var(--clr-secondary) !important;
  border-color: var(--clr-secondary) !important;
  transition: background-color 0.05s ease, border-color 0.05s ease, transform 0.3s ease !important;
}
.cta-links-area:has(.btn-solid:hover) .btn-outline {
  background-color: var(--clr-main) !important;
  border-color: var(--clr-main) !important;
  transition: background-color 0.05s ease, border-color 0.05s ease, transform 0.3s ease !important;
}
.cta-links-area .btn-solid, .cta-links-area .btn-outline {
  transition: background-color 0.05s ease, border-color 0.05s ease, transform 0.3s ease !important;
}'''

content = re.sub(old_block, new_block, content, flags=re.DOTALL)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated to Both Blue / Both Green")
