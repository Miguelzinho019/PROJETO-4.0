const leitura = document.getElementById('leitura');
const form = document.getElementById('form')
const generate = document.getElementById('generate')

form.addEventListener('submit', async (event) => {
    event.preventDefault();
    try{
        let result = await fetchRecipe(leitura.value)
        console.log(result)
    } catch (error){
        console.log(error)
    }
});

const fetchRecipe = async (leitura) => {
    let response = await fetch(`requests/api/generate_recipe.php?leitura=${encodeURIComponent(leitura)}`);
    let data = await response.json();
    let formatedData = data.recipe;

    return formatedData;
}