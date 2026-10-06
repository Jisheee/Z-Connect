import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace dark-blue with main (Blue)
content = re.sub(
    r'\.cta-links-area:has\(\.btn-outline:hover\) \.btn-solid \{([^}]+)background-color:\s*var\(--clr-dark-blue\)([^}]+)border-color:\s*var\(--clr-dark-blue\)([^}]+)\}',
    r'.cta-links-area:has(.btn-outline:hover) .btn-solid {\1background-color: var(--clr-main)\2border-color: var(--clr-main)\3}',
    content
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Reverted dark blue to main blue")
