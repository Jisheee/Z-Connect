import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\careers-section.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

content = re.sub(
    r'\.apply-now \.careers-feature-card \.feature-card-footer \.btn-solid \{([^}]+)\}',
    r'.apply-now .careers-feature-card .feature-card-footer .btn-solid {\1  border-color: transparent !important;\n}',
    content
)

content = re.sub(
    r'\.apply-now \.careers-feature-card \.feature-card-footer \.btn-solid:hover \{([^}]+)\}',
    r'.apply-now .careers-feature-card .feature-card-footer .btn-solid:hover {\1  border-color: transparent !important;\n}',
    content
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Removed border from Learn More button")
