import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace sticky header menu link before background
content = re.sub(
    r'(\.is-sticky\.header-basic \.menu-link::before\s*\{[^}]*?background-color:\s*)var\(--clr-main\)',
    r'\1var(--clr-secondary)',
    content
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated sticky nav underline color")
