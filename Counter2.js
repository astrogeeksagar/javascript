    function createCounter(init) {
        let count = init;

        return {
            increment: function () {
                count++;
                return count;
            },
            decrement: function () {
                count--;
                return count;
            },
            reset: function () {
                count = init;
                return count;
            }
        };
    }

    const counter = createCounter(5);
