// Replace 'YOUR_API_KEY' with your actual OpenAI API key

// Define a function to interact with ChatGPT
// function ready(prompt){
async function fetchData(prompt) {
  const apiKey = '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';
  // alert();
  try {
    const response = await fetch('https://api.openai.com/v1/engines/text-davinci-002/completions', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${apiKey}`,
      },
      body: JSON.stringify({
        prompt: prompt,
        max_tokens: 2000,  // You can adjust this based on your needs
      }),
    });

    const data = await response.json();
    return data.choices[0].text;
  } catch (error) {
    console.error('Error fetching data:', error);
    throw error;
  }
}

// Example usage
function ask(question){
const prompt = question;
fetchData(prompt)
  .then(data => {
    // console.log(data);
    var voice = new SpeechSynthesisUtterance(); 
    voice.text = data;
    window.speechSynthesis.speak(voice);
    // alert(data)
  })
  .catch(error => {
    console.error(error);
    alert(error)
  });
} 

