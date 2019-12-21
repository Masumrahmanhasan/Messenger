<template>
	<div class="contact-list">
		<ul>
			<li v-for="(contact, index) in contacts" :key="contact.id" @click="selectContact(index, contact)" :class="{ 'selected' : index === selected }">
				<div class="avatar">
					<img :src="contact.profile_image" :alt="contact.name">
				</div>
				<div class="info">
					<p class="name">{{ contact.name }}</p>
					<p class="email">{{ contact.email }}</p>
				</div>
			</li>
		</ul>
	</div>

</template>
<script>
	
	export default {
		props: {
			contacts:{
				type: Array,
				default: []
			}
		},
		data() {
			return{
				selected: 0
			};
		},
		methods: {
			selectContact(index, contact){
				this.selected = index;
				this.$emit('selected', contact);
			}
		}
	}
</script>

<style>
	.contact-list{
		flex: 2;
		max-height: 600px;
		overflow: scroll;
		border-left: 1px solid lightgrey;
	}
	.contact-list ul {
		list-style-type: none;
		padding-left: 0;
		
		
	}
	.contact-list ul li {
		display: flex;
		padding: 2px;
		cursor: pointer;
		border-bottom: 1px solid lightgrey;
		height: 80px;
		position: relative;

	}
	li.selected {
    background: #dfdfdf;
}
	.avatar{
		flex: 1;
		display: flex;
		align-items: center;

	}
	.avatar img{
		width: 35px;
		border-radius: 50%;
		margin: 0 auto;
	}
	.info {
		flex: 3;
		overflow: hidden;
		font-size: 12px;
		justify-content: center;
		display: flex;
		flex-direction: column;
	}
	p{
		margin: 0;
	}
	.name{
		font-weight: bold;
	}
</style>