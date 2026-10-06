import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Change .btn-outline:hover back to Green
content = re.sub(
    r'\.btn-outline:hover \{([^}]+)background-color:\s*#0a527c([^}]+)border-color:\s*#0a527c([^}]+)\}',
    r'.btn-outline:hover {\1background-color: var(--clr-secondary)\2border-color: var(--clr-secondary)\3}',
    content
)

# Re-add the linked hover for .btn-solid, making it Dark Blue when outline is hovered
old_block = r'''/\* CTA Area Linked Hover Effect - Specific target hover \*/
\.cta-links-area:has\(\.btn-outline:hover\) \.btn-solid \{.*?\}
\.cta-links-area:has\(\.btn-solid:hover\) \.btn-outline \{.*?\}
\.cta-links-area \.btn-solid, \.cta-links-area \.btn-outline \{.*?\}'''

new_block = '''/* CTA Area Linked Hover Effect - Specific target hover */
.cta-links-area:has(.btn-outline:hover) .btn-solid {
  background-color: var(--clr-dark-blue) !important;
  border-color: var(--clr-dark-blue) !important;
  transition: background-color 0.05s ease, border-color 0.05s ease, transform 0.3s ease !important;
}
.cta-links-area:has(.btn-solid:hover) .btn-outline {
  background-color: var(--clr-secondary) !important;
  border-color: var(--clr-secondary) !important;
  transition: background-color 0.05s ease, border-color 0.05s ease, transform 0.3s ease !important;
}
.cta-links-area .btn-solid, .cta-links-area .btn-outline {
  transition: background-color 0.05s ease, border-color 0.05s ease, transform 0.3s ease !important;
}'''

# If the block was removed, just append it. If it exists, replace it.
if "CTA Area Linked Hover Effect" in content:
    content = re.sub(r'/\* CTA Area Linked Hover Effect - Specific target hover \*/.*?(?=\n\n|\Z)', new_block, content, flags=re.DOTALL)
else:
    content += '\n' + new_block

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated hover logic")
