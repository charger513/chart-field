<template>
    <span class="chart">{{ field.value }}</span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],

    mounted() {
        $("span.chart").peity(this.field.type || 'pie', {
            fill: this.field.colors,
            radius: this.field.radius,
            innerRadius: this.field.innerRadius,
            delimiter: this.field.delimiter,
            height: this.field.height,
            max: this.field.max,
            min: this.field.min,
            stroke: this.field.stroke,
            strokeWidth: this.field.strokeWidth,
            padding: this.field.padding,
            width: this.field.width
        });
    }
}
</script>
