import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace variables
content = re.sub(
    r'--clr-accent:\s*#[0-9a-fA-F]+;',
    '--clr-accent: #60B644;',
    content
)
content = re.sub(
    r'--clr-accent-rgb:\s*[0-9,\s]+;',
    '--clr-accent-rgb: 96, 182, 68;',
    content
)
content = re.sub(
    r'--clr-secondary:\s*#[0-9a-fA-F]+;',
    '--clr-secondary: #60B644;',
    content
)
content = re.sub(
    r'--clr-secondary-rgb:\s*[0-9,\s]+;',
    '--clr-secondary-rgb: 96, 182, 68;',
    content
)

# Replace .bottom-line background
old_bottom_line = r'''\.sec-heading\.centered \.bottom-line,
\.sec-heading \.bottom-line,
\.line-on-side,
\.line \{
  display: block;
  position: relative;
  width: 5rem;
  height: 4px;
  background: var\(--clr-main\);
  border-radius: 1rem;
\}'''
new_bottom_line = '''.sec-heading.centered .bottom-line,
.sec-heading .bottom-line,
.line-on-side,
.line {
  display: block;
  position: relative;
  width: 5rem;
  height: 4px;
  background: var(--clr-accent);
  border-radius: 1rem;
}'''
content = re.sub(old_bottom_line, new_bottom_line, content)

# Replace .btn-solid
old_btn_solid = r'''\.btn-solid \{
  color: var\(--clr-white\);
  background-color: var\(--clr-main\);
  border-color: var\(--clr-main\);
\}
\.btn-solid:hover \{
  color: var\(--clr-main\);
  background-color: transparent;
\}'''
new_btn_solid = '''.btn-solid {
  color: var(--clr-white);
  background-color: var(--clr-secondary);
  border-color: var(--clr-secondary);
}
.btn-solid:hover {
  color: var(--clr-main);
  background-color: transparent;
  border-color: var(--clr-main);
}'''
content = re.sub(old_btn_solid, new_btn_solid, content)

# Replace .btn-outline
old_btn_outline = r'''\.btn-outline \{
  /\*\*/
  border: 2px solid;
  color: var\(--clr-main\);
  border-color: var\(--clr-main\);
  background-color: transparent;
\}
\.btn-outline:hover \{
  color: var\(--clr-white\);
  background-color: var\(--clr-main\);
\}'''
new_btn_outline = '''.btn-outline {
  /**/
  border: 2px solid;
  color: var(--clr-main);
  border-color: var(--clr-main);
  background-color: transparent;
}
.btn-outline:hover {
  color: var(--clr-white);
  background-color: var(--clr-secondary);
  border-color: var(--clr-secondary);
}'''
content = re.sub(old_btn_outline, new_btn_outline, content)

# Replace active nav links
content = re.sub(
    r'\.header-basic \.menu-link\.active, \.header-basic \.menu-link:hover \{\s*color: var\(--clr-main\);\s*\}',
    '.header-basic .menu-link.active, .header-basic .menu-link:hover {\n  color: var(--clr-accent);\n}',
    content
)
content = re.sub(
    r'\.header-basic \.menu-link\.active::before, \.header-basic \.menu-link:hover::before \{\s*background-color: var\(--clr-main\);\s*\}',
    '.header-basic .menu-link.active::before, .header-basic .menu-link:hover::before {\n  background-color: var(--clr-accent);\n}',
    content
)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("CSS Updated Successfully")
