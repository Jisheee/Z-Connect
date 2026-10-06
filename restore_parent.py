import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Remove the :has() block
content = re.sub(r'/\* CTA Area Linked Hover Effect - Specific target hover \*/.*?(?=\n\n|\Z)', '', content, flags=re.DOTALL)

# Add back the parent hover block that they actually liked!
clean_block = '''
/* CTA Area Linked Hover Effect - Parent Trigger */
.cta-links-area:hover .btn-solid {
  background-color: var(--clr-main) !important;
  border-color: var(--clr-main) !important;
}
.cta-links-area:hover .btn-outline {
  background-color: var(--clr-secondary) !important;
  border-color: var(--clr-secondary) !important;
}
'''

content += clean_block

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Restored parent hover")
