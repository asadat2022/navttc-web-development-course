// $('#div2').click(() => {
//     // $('#div1').show();
//     // $('#div1').addClass("bg-success");
//     // $('#div2').removeClass("bg-danger");
//     // $('#div2').toggleClass("text-info");
//     // $('#div1').css('display','block');
//     // console.log("sdkh");
//     // $(this).hide();
//     // $("#image").attr("href");

//     // console.log();
//     // console.log($("#image").attr("src","../00.Data/flower.jpeg"));
// })

axios.get('https://jsonplaceholder.typicode.com/posts')
.then((response)=>{
    console.log(response.data);
})