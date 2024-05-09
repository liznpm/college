<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
    <title>Card Carousel</title>
</head>
<body class="bg-gray-100">
    <div x-data="{
        activeCard: 1,
        totalCards: 6,
        cardsToShow: 3,
        moveAndShowNextCard(direction) {
            if (direction === 'next') {
                this.activeCard += 1;
                if (this.activeCard > this.totalCards) {
                    this.activeCard = 1;
                }
            } else if (direction === 'prev') {
                this.activeCard -= 1;
                if (this.activeCard < 1) {
                    this.activeCard = this.totalCards;
                }
            }
        },
    }">


    <div class="flex justify-end items-start mt-8">

                <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-4 px-6 rounded-full" x-on:click="moveAndShowNextCard('prev')">
                    &#8592;
                </button>
                <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-4 px-6 rounded-full" x-on:click="moveAndShowNextCard('next')">
                    &#8594;
                </button>
            </div>

        <div class="flex space-x-10 overflow-x-auto mt-20">
            <template x-for="(card, index) in Array.from({ length: totalCards + cardsToShow })" :key="index">
                <div x-show="index + 1 >= activeCard && index + 1 < activeCard + cardsToShow">
                    <div class="card-content">
                        <!-- Contenido específico para cada tarjeta -->
                        <template x-if="index % totalCards + 1 === 1">
                            <!-- Contenido para la tarjeta 1 -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img class="w-full" src="https://source.unsplash.com/random/450x200" alt="Sunset in the mountains">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2"></div>
                                    <p class="text-gray-700 text-base">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                    </p>
                                    <div class="flex justify-center items-center">
 

 
</div>

                                </div>
                                
                            </div>
                        </template>
                        <!-- Repite este bloque para las tarjetas restantes -->
                        <!-- ... -->
                        <template x-if="index % totalCards + 1 === 2">
                            <!-- Contenido para la tarjeta 1 -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img class="w-full" src="https://source.unsplash.com/random/450x200" alt="Sunset in the mountains">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2"></div>
                                    <p class="text-gray-700 text-base">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                    </p>
                                </div>
                                
                            </div>
                        </template>

                        <template x-if="index % totalCards + 1 === 3">
                            <!-- Contenido para la tarjeta 1 -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img class="w-full" src="https://source.unsplash.com/random/450x200" alt="Sunset in the mountains">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2"></div>
                                    <p class="text-gray-700 text-base">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                    </p>
                                </div>
                                
                            </div>
                        </template>
                        <template x-if="index % totalCards + 1 === 4">
                            <!-- Contenido para la tarjeta 1 -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img class="w-full" src="https://source.unsplash.com/random/450x200" alt="Sunset in the mountains">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2"></div>
                                    <p class="text-gray-700 text-base">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                    </p>
                                </div>
                                
                            </div>
                        </template>
                        <template x-if="index % totalCards + 1 === 5">
                            <!-- Contenido para la tarjeta 1 -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img class="w-full" src="https://source.unsplash.com/random/450x200" alt="Sunset in the mountains">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2"></div>
                                    <p class="text-gray-700 text-base">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                    </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag1</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag2</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag3</span>
                                </div>
                            </div>
                        </template>
                        <template x-if="index % totalCards + 1 === 6">
                            <!-- Contenido para la tarjeta 1 -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img class="w-full" src="https://source.unsplash.com/random/450x200" alt="Sunset in the mountains">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2"></div>
                                    <p class="text-gray-700 text-base">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                    </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag1</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag2</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag3</span>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </template>
        </div>
    </div>
</body>
</html>
