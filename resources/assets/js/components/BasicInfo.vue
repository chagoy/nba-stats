<template>
    <div class="container">
        Name: {{ info.resultSets[0].rowSet[0][3] }}
        College: {{ info.resultSets[0].rowSet[0][7] }}
    </div>
</template>

<script>
    export default {
        props: ['info', 'career']
    }
</script>
