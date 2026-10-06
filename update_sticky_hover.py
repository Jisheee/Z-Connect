import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\sticky-solutions.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace the background and box-shadow in hover
content = re.sub(
    r'(\.sticky-solutions__cta:hover\s*\{[^}]*?background:\s*)#0b5ed7([^}]*?box-shadow:\s*0\s+8px\s+24px\s+)rgba\([^)]+\)',
    r'\1var(--clr-secondary)\2rgba(96, 182, 68, 0.3)',
    content
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated sticky solutions button hover")
