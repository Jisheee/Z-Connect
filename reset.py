import re

descriptions = {
    'Sr. Account Manager': 'Drive strategic sales initiatives, manage key client relationships, and oversee a portfolio of enterprise accounts to deliver customized IT and networking solutions.',
    'Account Manager': 'Maintain and grow relationships with our valued clients. You will identify business opportunities, propose tailored IT solutions, and ensure customer success.',
    'Sales Consultant': 'Act as the first point of contact for prospective clients, offering expert advice on our IT and structured cabling solutions to meet their business needs.',
    
    'HR Manager': 'Lead human resources operations including employee relations, performance management, and organizational development to foster a positive workplace culture.',
    'HRIS Manager': 'Oversee the implementation and maintenance of Human Resources Information Systems, ensuring data integrity, optimized workflows, and accurate reporting.',
    'Benefits Officer/Resource Manager': 'Manage employee compensation, benefits programs, and resource allocation to ensure our team is supported, healthy, and highly motivated.',
    'Recruitment Officer': 'Spearhead talent acquisition efforts by sourcing, interviewing, and onboarding top-tier IT and networking professionals to join our growing team.',
    'HR Associate': 'Support daily HR operations, assist with employee onboarding, maintain records, and help facilitate employee engagement initiatives.',
    
    'Project Manager': 'Plan, execute, and deliver complex IT and structured cabling projects on time and within budget, acting as the bridge between technical teams and clients.',
    
    'Network Engineer': 'Design, implement, and troubleshoot enterprise networks and structured cabling systems to ensure optimal performance, security, and reliability.',
    
    'Admin/Finance Manager': 'Oversee office administration and financial operations, including budgeting, financial reporting, and ensuring corporate compliance.',
    'Liaison Officer/Accounting Staff': 'Handle external corporate communications, process accounting transactions, and ensure seamless financial interactions with partners and vendors.',
    'Accounting Staff': 'Perform daily accounting tasks, manage accounts payable/receivable, prepare financial statements, and ensure accurate financial record-keeping.',
    'Field Collection Officer': 'Manage field collections, interact directly with clients to facilitate payment processes, and maintain accurate records of accounts.',
    'Purchasing Officer': 'Source equipment and materials, negotiate with suppliers, and manage procurement processes to ensure cost-effective purchasing for our IT projects.',
    'Purchasing/Logistics': 'Coordinate the procurement and delivery of IT hardware and cabling materials, optimizing supply chain operations and inventory management.',
    
    'Technical Drafter': 'Create detailed CAD drawings and technical blueprints for structured cabling and network infrastructure projects.',
    'Warehouse Personnel': 'Manage inventory, organize stock, and ensure the safe and efficient handling of IT equipment and cabling materials in our warehouse.',
    'Driver': 'Ensure the safe and timely transportation of personnel, IT equipment, and project materials to various client sites.',
    'Utility': 'Maintain office and warehouse facilities, ensuring a clean, safe, and organized working environment for all staff.'
}

filepath = 'inc/apply-now-section.php'
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

def repl(match):
    full_match = match.group(0)
    title = match.group(1)
    desc = descriptions.get(title, 'Join our team to make an impact in this role.')
    
    # Add modal trigger and cursor to the job-card style and attributes
    new_card = full_match.replace('<div class="job-card"', f'<div class="job-card" data-bs-toggle="modal" data-bs-target="#jobModal" data-job-title="{title}" data-job-desc="{desc}"')
    new_card = new_card.replace('style="', 'style="cursor: pointer; ')
    return new_card

pattern = re.compile(r'<div class="job-card".*?<h4[^>]*>(.*?)</h4>.*?</div>', re.DOTALL)
content = pattern.sub(repl, content)

modal_html = """
<!-- Job Description Modal -->
<div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border-radius: 12px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
      <div class="modal-header" style="border-bottom: 1px solid #eee; padding: 20px 30px;">
        <h5 class="modal-title" id="jobModalLabel" style="color: #11345f; font-weight: 700;">Job Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="padding: 30px;">
        <p id="jobModalDesc" style="color: #5a7590; line-height: 1.6; margin-bottom: 0;">Job Description</p>
      </div>
      <div class="modal-footer" style="border-top: none; padding: 0 30px 30px; justify-content: flex-start;">
        <a href="#" id="jobModalApplyBtn" class="btn-solid" style="padding: 10px 25px; border-radius: 6px; text-decoration: none;">Apply for this Position</a>
      </div>
    </div>
  </div>
</div>
"""

js_logic = """
            const jobModal = document.getElementById('jobModal');
            if(jobModal) {
              document.body.appendChild(jobModal);
              jobModal.addEventListener('show.bs.modal', function (event) {
                const card = event.relatedTarget;
                const title = card.getAttribute('data-job-title');
                const desc = card.getAttribute('data-job-desc');
                
                const modalTitle = jobModal.querySelector('.modal-title');
                const modalDesc = jobModal.querySelector('#jobModalDesc');
                const modalApplyBtn = jobModal.querySelector('#jobModalApplyBtn');
                
                modalTitle.textContent = title;
                modalDesc.textContent = desc;
                modalApplyBtn.href = 'application.php?position=' + encodeURIComponent(title);
              });
            }
            
            // Prevent modal from opening if they click the Apply Now button directly on the card
            document.querySelectorAll('.job-card .btn-outline').forEach(btn => {
              btn.addEventListener('click', function(e) {
                e.stopPropagation();
              });
            });
"""

content = content.replace('<script>', modal_html + '\n        <script>')
content = content.replace('});\n            });\n          });', '});\n            });\n' + js_logic + '\n          });')

# Move the Ready to Make an Impact heading
old_heading = """        <div class="sec-heading centered mb-60">
          <div class="content-area">
            <span class="pre-title wow fadeInUp" data-wow-delay=".2s">JOIN OUR TEAM</span>
            <h2 class="title wow fadeInUp" data-wow-delay=".4s">Ready to Make an Impact?</h2>
            <p class="desc wow fadeInUp" data-wow-delay=".6s">We're looking for talented and passionate individuals to join our growing team. If you're ready to work on innovative IT solutions and make a difference in the industry, we'd love to hear from you.</p>
          </div>
        </div>"""
content = content.replace(old_heading, '')

new_heading = """          <div class="sec-heading centered mb-60" style="text-align: center; margin-bottom: 40px;">
            <div class="content-area">
              <span class="pre-title" style="color: #3b90c3; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 14px; display: block; margin-bottom: 10px;">JOIN OUR TEAM</span>
              <h2 class="title" style="color: #0b1a2a; font-size: 42px; font-weight: 800; margin-bottom: 20px;">Ready To Make An Impact?</h2>
              <p class="desc" style="color: #5a7590; font-size: 16px; line-height: 1.6; max-width: 700px; margin: 0 auto;">We're looking for talented and passionate individuals to join our growing team. If you're ready to work on innovative IT solutions and make a difference in the industry, we'd love to hear from you.</p>
            </div>
          </div>"""

content = content.replace(
    '<h2 class="title" style="margin-bottom: 15px; color: #11345f; text-align: center;">Find Your Next Great Adventure</h2>\n          <p style="margin-bottom: 40px; color: #5a7590; text-align: center;">Explore our open positions below. Click \'Apply Now\' to auto-fill your application.</p>',
    new_heading
)

# Add the hover style block
style_block = """
          <style>
            .job-card {
                transition: all 0.3s ease !important;
            }
            .job-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(59, 144, 195, 0.15) !important;
                border-color: rgba(59, 144, 195, 0.3) !important;
            }
            .job-card .btn-outline {
                transition: all 0.3s ease !important;
            }
            .job-card .btn-outline:hover {
                background: #3b90c3 !important;
                color: white !important;
                border-color: #3b90c3 !important;
            }
          </style>
"""

content = content.replace(new_heading, style_block + '\n' + new_heading)

# Add the subtle top border to job cards
content = content.replace(
    'border: 1px solid #eee; border-radius: 8px;',
    'border: 1px solid #eee; border-top: 4px solid #3b90c3; border-radius: 8px;'
)

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)
print('Done resetting')

