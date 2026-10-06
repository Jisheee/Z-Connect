import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace the hero swiper button hover background
content = re.sub(
    r'(\.hero-swiper-slider \.swiper-button-(?:prev|next):hover\s*(?:,\s*\.hero-swiper-slider \.swiper-button-(?:prev|next):hover)?\s*\{[^}]*?background(?:-color)?:\s*rgba\()var\(--clr-main-rgb\)',
    r'\1var(--clr-secondary-rgb)',
    content
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated hero swiper button hover color")
