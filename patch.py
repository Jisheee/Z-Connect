import re
file_path = r'c:\Users\lynlo\OneDrive\Desktop\ZConnect GIT\inc\business-partners-section.php'
with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

new_array = '''              $all_partners = [
                ['name' => 'Ampleon', 'path' => 'assets/images-zconnect/clients-logos/ampleon_nobg.png', 'url' => 'https://www.ampleon.com/', 'scale' => 2.2],
                ['name' => 'Atos', 'path' => 'assets/images-zconnect/clients-logos/atos_400x300.png?v=2', 'url' => 'https://atos.net/en/'],
                ['name' => 'bneXt', 'path' => 'assets/images/business-partners-logos/bnext.png', 'url' => 'https://bnext.tech/'],
                ['name' => 'Fujitsu', 'path' => 'assets/images/business-partners-logos/fujitsu.png', 'url' => 'https://www.fujitsu.com/ph/'],
                ['name' => 'Globe', 'path' => 'assets/images/business-partners-logos/globe logo.png', 'url' => 'https://www.globe.com.ph/'],
                ['name' => 'Maynilad', 'path' => 'assets/images/business-partners-logos/maynilad.png', 'url' => 'https://www.mayniladwater.com.ph/'],
                ['name' => 'Meralco', 'path' => 'assets/images/business-partners-logos/Meralco Logo.webp', 'url' => 'https://www.meralco.com.ph/'],
                ['name' => 'nexperia', 'path' => 'assets/images/business-partners-logos/Nexperia Logo.webp', 'url' => 'https://www.nexperia.com/'],
                ['name' => 'NTT', 'path' => 'assets/images/business-partners-logos/ntt new.jpg', 'url' => 'https://www.global.ntt/'],
                ['name' => 'P.T. Cerna Corporation', 'path' => 'assets/images/business-partners-logos/PT Cerna Corporation Logo.jpeg', 'url' => 'https://www.ptcerna.com/', 'scale' => 2.2],
                ['name' => 'Republic Chemical Industries', 'path' => 'assets/images/business-partners-logos/rci.jpg', 'url' => 'https://www.pioneerph.com/'],
                ['name' => 'SyCip Salazar Hernandez & Gatmaitan', 'path' => 'assets/images/business-partners-logos/Hernandez and Gaimaitan Logo.png', 'url' => 'https://syciplaw.com/'],
                ['name' => 'PKI', 'path' => 'assets/images/business-partners-logos/pki.jpg', 'url' => 'https://sumitomoelectric.com/company/office_group_companies/pilipinas-kyohritsu-inc'],
                ['name' => 'TaskUs', 'path' => 'assets/images/business-partners-logos/taskus new.webp', 'url' => 'https://www.taskus.com/'],
                ['name' => 'Smart', 'path' => 'assets/images/business-partners-logos/smart.png', 'url' => 'https://smart.com.ph/', 'scale' => 2.2],
                ['name' => 'Toyota Financial Services', 'path' => 'assets/images/business-partners-logos/Toyota Financial Services Logo.png', 'url' => 'https://www.toyotafinancial.ph/'],
                ['name' => 'Western Digital', 'path' => 'assets/images/business-partners-logos/WesternDigital new.png', 'url' => 'https://www.westerndigital.com/'],
                ['name' => 'ST Telemedia', 'path' => 'assets/images/business-partners-logos/STTELEMEDIA.png', 'url' => 'https://www.sttelemedia.com/'],
                ['name' => 'EXL', 'path' => 'assets/images/business-partners-logos/EXL.png', 'url' => 'https://www.exlservice.com/'],
                ['name' => 'PHINMA', 'path' => 'assets/images/business-partners-logos/PHINMA.png', 'url' => 'https://www.phinma.edu.ph/', 'scale' => 2.2],
                ['name' => 'Ayala Malls', 'path' => 'assets/images/business-partners-logos/ayalamalls.png', 'url' => 'https://www.ayalamalls.com/', 'scale' => 2.2],
                ['name' => 'Sagittarius Mining', 'path' => 'assets/images/business-partners-logos/smi-logo.png', 'url' => 'https://www.smi.com.ph/'],
                ['name' => 'Cebeco II', 'path' => 'assets/images/business-partners-logos/cebeco.webp', 'url' => 'http://cebeco2.com.ph/'],
                ['name' => 'Autoliv', 'path' => 'assets/images/business-partners-logos/autoliv.png', 'url' => 'https://www.autoliv.com/'],
                ['name' => 'Densoten', 'path' => 'assets/images/business-partners-logos/denso-ten.png', 'url' => 'https://www.denso-ten.com/'],
                ['name' => 'Furukawa', 'path' => 'assets/images/business-partners-logos/furukawa.png', 'url' => 'https://www.furukawa.co.jp/en/', 'scale' => 2.2]
              ];'''
old_array_pattern = r'              \$all_partners = \[.*?\];'
content = re.sub(old_array_pattern, new_array, content, flags=re.DOTALL)

old_loop_pattern = r'              foreach \(\$all_partners as \$partner\) \{.*?echo \'</a>\';\n              \}'
new_loop = '''              foreach ($all_partners as $partner) {
                  $link = isset($partner['url']) ? $partner['url'] : 'https://www.google.com/search?q=' . urlencode($partner['name'] . ' official website');
                  $scale_style = isset($partner['scale']) ? ' style="width: ' . ($partner['scale'] * 100) . '%; max-width: ' . ($partner['scale'] * 100) . '%; max-height: ' . ($partner['scale'] * 100) . '%; object-fit: contain;"' : '';
                  echo '<a href="' . htmlspecialchars($link) . '" target="_blank" rel="noopener noreferrer" class="bp-logo-card" title="' . htmlspecialchars($partner['name']) . '" style="text-decoration: none; overflow: hidden;">';
                  echo '<img loading="lazy" src="' . $partner['path'] . '" alt="' . htmlspecialchars($partner['name']) . '" onerror="this.style.display=\'none\';"' . $scale_style . '>';
                  echo '</a>';
              }'''
content = re.sub(old_loop_pattern, new_loop, content, flags=re.DOTALL)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)
