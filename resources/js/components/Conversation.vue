<template>
	<div class="conversation">
		<h1>{{ contact ? contact.name : 'Select a contact'}}</h1>

		<MessageFeed :contact="contact" :messages="messages"/>
		<MessageComposer @send="sendMessages"/>
	</div>

</template>
<script>
	import MessageFeed from './MessageFeed';
	import MessageComposer from './MessageComposer';
	export default{
		props:{
			contact:{
				type: Object,
				default: null
			},
			messages:{
				type: Array,
				default: []
			}
		},
		methods:{
			sendMessages(text){
				console.log(text);
			}
		},
		components: {MessageFeed, MessageComposer}
	}
</script>

<style>
	.conversation{
		flex: 5;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}
	h1{
		font-size: 20px;
		padding: 10px;
		margin: 0;
		border-bottom: 1px dashed lightgrey;
	}
</style>
