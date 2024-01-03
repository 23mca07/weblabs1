function validate form()
{
    var productId=document.getElementById('productId').value;
    var productName=document.getElementById('productName').value;
    var brand=document.getElementById('brand').value;
    var category=document.getElementById('category').value;
    var price=document.getElementById('price').value;
    
    
    if(!productId|| !productname||!brand||!category||!price){
    alert('ALL FIELDS ARE REQUIRED');
    return false;}
    
    if(!/^\d{8}.test(productId)){
    slert('productId should contain upto 8 integers');
    return false;}
    
    if(productName.trim()===""){
    alert('productName cannot be empty');
    return false;}
    
    
    
    if(!/^[a-zA-Z\s]+$/.test(brand)){
    alert('brand must contain only letters and spaces');
    return false;}
    
    
    if(!/^[a-zA-Z\s]+$/.test(category)){
    alert('category must contain only letters and spaces');
    return false;}
    
    if(!/^\d{8}.test(price)){
    alert('price should contain upto 8 integers');
    return false;}
    
    
    
    alert('booking confirmed!\nproductId:'+productId+'\nproductName:'+productName+'\nbrand:'+brand+'\ncategory:'+category);
    document.getElemementById('GROCERY MANAGEMENT FORM').reset();
    }
    
    
    
    
    