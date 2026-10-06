import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Add transform to .btn-solid:hover
content = re.sub(
    r'\.btn-solid:hover \{([^}]+)\}',
    r'.btn-solid:hover {\1  transform: translateY(-3px);box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);\n}',
    content
)

# Add transform to .btn-outline:hover
content = re.sub(
    r'\.btn-outline:hover \{([^}]+)\}',
    r'.btn-outline:hover {\1  transform: translateY(-3px);box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);\n}',
    content
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Added float back")
