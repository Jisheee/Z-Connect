import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace the inner-page-header menu link before background
content = re.sub(
    r'(\.header-basic\.inner-page-header a::before,\s*\.header-basic\.inner-page-header \.menu-link::before\s*\{\s*background-color:\s*)var\(--clr-main\)',
    r'\1var(--clr-secondary)',
    content
)

# Also update the hover state if there's any specific one
content = re.sub(
    r'(\.header-basic\.inner-page-header \.menu-link:hover::before\s*\{\s*background-color:\s*)var\(--clr-main\)',
    r'\1var(--clr-secondary)',
    content
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated nav underline color for inner pages")
