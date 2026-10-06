import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

append_css = """
/* Generic CTA Area Styling */
.cta-links-area {
  display: inline-flex;
  flex-direction: row;
  align-items: center;
  gap: 2.5rem; /* Add spacing between buttons */
  flex-wrap: wrap;
}
@media (max-width: 575px) {
  .cta-links-area {
    gap: 1rem;
  }
}
"""

content += append_css

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Added generic gap to cta-links-area")
