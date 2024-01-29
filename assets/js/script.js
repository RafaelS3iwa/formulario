const btnGerar = document.querySelector("#confirmar-pdf");

btnGerar.addEventListener("click", () => {
    setTimeout(() => {
        const content = document.querySelector("#paginaPDF");
        const opcoes = {
            margin: [-100, 10, 85, 10],
            filename: "formulario.pdf",
            html2canvas: { scale: 1 },
            jsPDF: { unit: "mm", format: "a4", orientation: "portrait" },
        };
        html2pdf().set(opcoes).from(content).save();
    }, 500); // Ajuste o tempo conforme necessário
});
