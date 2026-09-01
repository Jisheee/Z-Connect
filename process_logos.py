from PIL import Image, ImageOps
import os

logo_dir = 'assets/images-zconnect/clients-logos'
for filename in os.listdir(logo_dir):
    if filename.endswith('.png'):
        filepath = os.path.join(logo_dir, filename)
        # Open and convert to grayscale
        img = Image.open(filepath).convert('L')
        
        # Invert grayscale: White background becomes 0, Dark logo becomes 255
        inverted = ImageOps.invert(img)
        
        # Create a solid white image
        white_img = Image.new('RGB', img.size, (255, 255, 255))
        
        # Add the inverted mask as the alpha channel
        white_img.putalpha(inverted)
        
        # Save
        white_img.save(filepath)
        print(f"Processed {filename}")
