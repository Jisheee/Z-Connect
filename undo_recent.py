import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Revert margin-right from 2.5rem back to 1.5rem
content = re.sub(
    r'(\.page-hero \.cta-links-area \.cta-link \{[^}]+margin-right:\s*)2\.5rem(;\s*[^}]*\})',
    r'\g<1>1.5rem\g<2>',
    content
)

# Remove the appended CTA Linked Hover and Generic Gap rules
content = re.sub(r'/\* CTA Area Linked Hover Effect \*/.*', '', content, flags=re.DOTALL)
content = re.sub(r'/\* Generic CTA Area Styling \*/.*', '', content, flags=re.DOTALL)
content = re.sub(r'\.cta-links-area:has\(\.btn-solid:hover\).*?\}', '', content, flags=re.DOTALL)
content = re.sub(r'\.cta-links-area:has\(\.btn-outline:hover\).*?\}', '', content, flags=re.DOTALL)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Undo successful")
