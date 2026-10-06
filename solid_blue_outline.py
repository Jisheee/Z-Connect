import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\css\main-LTR.css'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

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
  background-color: var\(--clr-secondary\);
  border-color: var\(--clr-secondary\);
\}'''
new_btn_outline = '''.btn-outline {
  /**/
  border: 2px solid;
  color: var(--clr-white);
  border-color: var(--clr-main);
  background-color: var(--clr-main);
}
.btn-outline:hover {
  color: var(--clr-white);
  background-color: var(--clr-secondary);
  border-color: var(--clr-secondary);
}'''
content = re.sub(old_btn_outline, new_btn_outline, content)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated outline buttons to solid blue")
