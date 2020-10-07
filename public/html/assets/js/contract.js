var banQuyenPhanMem=document.getElementById("banQuyenPhanMem");
var banQuyenSapHetHan=document.getElementById("banQuyenSapHetHan");
var content=document.getElementById("content");

//thiet lap mennu

banQuyenPhanMem.onclick=function(){
     banQuyenPhanMem.replaceChild('Danh sách bản quyền',content);
    
};
banQuyenSapHetHan.onclick=function(){
    content.attributes='Bản quyền sắp hết hạn';  
};

// $(document).ready(function(){
//     $("#banQuyenPhanMem").click(function(){
//         $("#content").val("Danh sách bản quyền");
//     });
// });


