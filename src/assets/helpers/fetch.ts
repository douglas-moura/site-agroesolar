export const testeServeApi = (): void => {
    console.log('chegou aqui');
    
    fetch('http://localhost:4000/submit', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            nome: 'Douglas',
            email: 'douglas@email.com',
        }),
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error('Erro:', error));
}