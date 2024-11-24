<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        $quizData = [
            
        [
                  "question"=>"What does 'zero-shot learning' enable in generative AI models?",
                  "option_one"=>"Learning with no labels",
                  "option_two"=>"Handling unseen tasks or data",
                  "option_three"=>"Improving accuracy",
                  "option_four"=>"Faster training",
                  "answer"=>"Handling unseen tasks or data"
                ],
        [
                  "question"=>"What is 'prompt engineering' in the context of generative AI?",
                  "option_one"=>"Writing specialized algorithms",
                  "option_two"=>"Optimizing inputs to achieve desired AI outputs",
                  "option_three"=>"Dataset labeling",
                  "option_four"=>"Neural network tuning",
                  "answer"=>"Optimizing inputs to achieve desired AI outputs"
                ],
        [
                  "question"=>"What does the 'fine-tuning' process in a pre-trained model involve?",
                  "option_one"=>"Retraining the model from scratch",
                  "option_two"=>"Adapting the model to a specific task or dataset",
                  "option_three"=>"Reducing the model size",
                  "option_four"=>"Optimizing the hardware",
                  "answer"=>"Adapting the model to a specific task or dataset"
                ],
        [
                  "question"=>"Which term describes the ability of AI models to generate creative outputs beyond the training data?",
                  "option_one"=>"Generalization",
                  "option_two"=>"Creativity",
                  "option_three"=>"Overfitting",
                  "option_four"=>"Extrapolation",
                  "answer"=>"Generalization"
                ],
        [
                  "question"=>"What is the difference between stable diffusion and GAN-based models?",
                  "option_one"=>"Stable diffusion generates images from noise",
                  "option_two"=>"GANs use transformers",
                  "option_three"=>"GANs rely on latent spaces",
                  "option_four"=>"Diffusion models do not use loss functions",
                  "answer"=>"Stable diffusion generates images from noise"
                ],
        [
                  "question"=>"Which of the following algorithms can be used for generative tasks?",
                  "option_one"=>"Decision Trees",
                  "option_two"=>"Variational Autoencoders (VAEs)",
                  "option_three"=>"Naive Bayes",
                  "option_four"=>"Random Forest",
                  "answer"=>"Variational Autoencoders (VAEs)"
                ],
        [
                  "question"=>"What does the 'temperature' parameter in generative AI models control?",
                  "option_one"=>"Model size",
                  "option_two"=>"Creativity/randomness of output",
                  "option_three"=>"Training time",
                  "option_four"=>"Accuracy",
                  "answer"=>"Creativity/randomness of output"
                ],
        [
                  "question"=>"What kind of datasets are best for training generative AI models?",
                  "option_one"=>"Labeled datasets",
                  "option_two"=>"Large, diverse, and representative datasets",
                  "option_three"=>"Small, curated datasets",
                  "option_four"=>"Single-feature datasets",
                  "answer"=>"Large, diverse, and representative datasets"
                ],
        [
                  "question"=>"What is 'reinforcement learning from human feedback' (RLHF) used for in AI?",
                  "option_one"=>"To optimize training speed",
                  "option_two"=>"To align AI outputs with human preferences",
                  "option_three"=>"To pre-train models",
                  "option_four"=>"To test GANs",
                  "answer"=>"To align AI outputs with human preferences"
                ],
        [
                  "question"=>"Which generative model can be described as using a probabilistic framework to create data?",
                  "option_one"=>"Transformer",
                  "option_two"=>"Variational Autoencoder (VAE)",
                  "option_three"=>"Support Vector Machine",
                  "option_four"=>"Decision Tree",
                  "answer"=>"Variational Autoencoder (VAE)"
                ],
        [
                  "question"=>"What is 'autoregressive modeling' in generative AI?",
                  "option_one"=>"Generating outputs sequentially, token by token",
                  "option_two"=>"Using all data points at once",
                  "option_three"=>"Clustering data",
                  "option_four"=>"Dimensionality reduction",
                  "answer"=>"Generating outputs sequentially, token by token"
                ],
        [
                  "question"=>"Which of these generative AI techniques focuses on text generation?",
                  "option_one"=>"GANs",
                  "option_two"=>"LSTMs",
                  "option_three"=>"Transformers",
                  "option_four"=>"Diffusion Models",
                  "answer"=>"Transformers"
                ],
        [
                  "question"=>"What does 'tokenization' mean in NLP models like GPT?",
                  "option_one"=>"Splitting text into smaller units",
                  "option_two"=>"Summarizing text",
                  "option_three"=>"Annotating text",
                  "option_four"=>"Translating text",
                  "answer"=>"Splitting text into smaller units"
                ],
        [
                  "question"=>"Which concept allows generative models like GPT to retain context over long sequences?",
                  "option_one"=>"Positional encoding",
                  "option_two"=>"Dropout",
                  "option_three"=>"Regularization",
                  "option_four"=>"Pruning",
                  "answer"=>"Positional encoding"
                ],
        [
                  "question"=>"What kind of task is image inpainting, often performed by generative AI?",
                  "option_one"=>"Image compression",
                  "option_two"=>"Filling missing parts in images",
                  "option_three"=>"Object detection",
                  "option_four"=>"Image resizing",
                  "answer"=>"Filling missing parts in images"
                ],
        [
                  "question"=>"Which of the following is an example of audio synthesis by generative AI?",
                  "option_one"=>"ChatGPT",
                  "option_two"=>"WaveNet",
                  "option_three"=>"BERT",
                  "option_four"=>"Random Forest",
                  "answer"=>"WaveNet"
                
              ]
              
        ];

        DB::table('quizzes')->insert($quizData);
    }
}
	
