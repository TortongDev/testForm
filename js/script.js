// $(this).ready(()=>{
    // $('[type=submit]').click((e)=>{
    //     e.preventDefault();
    //     $.ajax({
    //         url: 'insert.php',
    //         data:{
    //             name:'rrd',
    //             dated:'2022-02-20',
    //             name_01:'111',
    //             price:22222
    //         },
    //         type: 'post',
    //         dataType:'json',
    //         success:(datares)=>{
    //             console.log(datares);
    //         },
    //         error:(datares)=>{
    //             console.log(datares);
    //         }
    //     })
    // })

    // $.ajax({
    //     async: true,
	//     crossDomain: true,
    //     url: 'https://google-search3.p.rapidapi.com/api/v1/search/q=elon+musk',
    //     type: 'get',
    //     headers: {
    //         "X-User-Agent": "desktop",
    //         "X-Proxy-Location": "EU",
    //         "X-RapidAPI-Host": "google-search3.p.rapidapi.com",
    //         "X-RapidAPI-Key": "a726ad4a7fmshbea5aad95c93ed9p11ea87jsnb2b54ead2662"
    //     },

    //     success:(res)=>{
    //         console.log(res);
    //     }
    // })
    document.addEventListener('DOMContentLoaded',()=>{
        var keys = document.querySelector('[name=price]')
         document.querySelector('[name=price]').addEventListener('keyup',()=>{
            if(isNaN(keys.value)){
                alert('กรุณากรอกข้อมูลเป็นตัวเลข')
                keys.value  =''
            }else{
                
            }
          
        })
    })
// })