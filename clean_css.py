import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Completely strip all CTA Area Linked Hover Effect blocks
content = re.sub(r'/\* CTA Area Linked Hover Effect.*?(?=\n\n|\Z)', '', content, flags=re.DOTALL)
content = re.sub(r'\.cta-links-area:has.*?(?=\n\n|\Z)', '', content, flags=re.DOTALL)

# Clean up any leftover hanging rules from bad replaces
content = re.sub(r'\.cta-links-area \.btn-solid, \.cta-links-area \.btn-outline \{.*?\}', '', content, flags=re.DOTALL)

clean_block = '''
/* CTA Area Linked Hover Effect - Specific target hover */
.cta-links-area:has(.btn-outline:hover) .btn-solid {
  background-color: var(--clr-main) !important;
  border-color: var(--clr-main) !important;
}
.cta-links-area:has(.btn-solid:hover) .btn-outline {
  background-color: var(--clr-secondary) !important;
  border-color: var(--clr-secondary) !important;
}
.cta-links-area .btn-solid, .cta-links-area .btn-outline {
  transition: background-color 0.1s ease, border-color 0.1s ease, transform 0.3s ease !important;
}
'''

content += clean_block

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Cleaned up CSS")
