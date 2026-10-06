import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace all swiper-button hover background colors that use main-rgb
content = re.sub(
    r'(\.swiper-button-(?:prev|next):hover\s*(?:,\s*\..*?\.swiper-button-(?:prev|next):hover)?\s*\{[^}]*?background(?:-color)?:\s*rgba\()var\(--clr-main-rgb\)',
    r'\1var(--clr-secondary-rgb)',
    content
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated all swiper button hover colors")
