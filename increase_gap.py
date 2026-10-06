import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

content = re.sub(
    r'(\.page-hero \.cta-links-area \.cta-link \{[^}]+margin-right:\s*)1\.5rem(;\s*[^}]*\})',
    r'\g<1>2.5rem\g<2>',
    content
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Increased gap between buttons")
