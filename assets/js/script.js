const btnGerar = document.querySelector("#confirmar-pdf"); //Alterar nome do id do botão depois

btnGerar.addEventListener("click", ()=>{

    //Conteúdo PDF
    const content = document.querySelector("#paginaPDF") //Pegar a informação na página onde o PDF vai estar escrito

    //Configuração do arquivo final do PDF
    const opcoes = {
        margin: [10, 10, 10, 10], //margem
        filename: "formulario.pdf", 
        html2canvas: {scale:2}, //Fonte
        jsPDF: {unit: "mm", format: "a4", orientation: "portrait"}, 
    };

    //Gerar e baixar o PDF
    html2pdf().set(opcoes).from(content).save(); 
});