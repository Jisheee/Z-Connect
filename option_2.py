import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Change .btn-outline:hover to Dark Blue
content = re.sub(
    r'\.btn-outline:hover \{([^}]+)background-color:\s*var\(--clr-secondary\)([^}]+)border-color:\s*var\(--clr-secondary\)([^}]+)\}',
    r'.btn-outline:hover {\1background-color: #0a527c\2border-color: #0a527c\3}',
    content
)

# Remove the linked hover that makes btn-solid turn Blue when btn-outline is hovered
content = re.sub(
    r'\.cta-links-area:has\(\.btn-outline:hover\) \.btn-solid \{.*?\}',
    '',
    content,
    flags=re.DOTALL
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated to Option 2")
