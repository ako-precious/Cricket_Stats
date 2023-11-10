<template>
    <form>
        <div class="mb-8 mt-4 flex flex-wrap gap-2">
            <div class="flex flex-nowrap items-center">
                <input
                    type="text"
                    placeholder="Price from"
                    class="input-filter-l w-28"
                />
                <input
                    type="text"
                    placeholder="Price to"
                    class="input-filter-r w-28"
                />
            </div>

            <div class="flex flex-nowrap items-center">
                <select class="input-filter-l w-28">
                    <option :value="null">Beds</option>
                    <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
                    <option>6+</option>
                </select>
                <select class="input-filter-r w-28">
                    <option :value="null">Baths</option>
                    <option v-for="n in 5" :key="n" :value="n">{{ n }}</option>
                    <option>6+</option>
                </select>
            </div>

            <div class="flex flex-nowrap items-center">
                <div
                    class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4"
                >
                    
                    <input
                        class="pl-2 outline-none border-none"
                        type="text"
                        name=""
                        id=""
                        placeholder="Email Address"
                    />
                </div>
                <input
                    type="text"
                    placeholder="Area from"
                    class="input-filter-l w-28"
                />
                <input
                    type="text"
                    placeholder="Area to"
                    class="input-filter-r w-28"
                />
            </div>

            <button type="submit" class="btn-normal">Filter</button>
            <button type="reset">Clear</button>
        </div>
    </form>
</template>
