<?php

return [

	/**
	 * Default path of repositories in `app` folder.
	 * In this case:
	 * 		app/Repositories
	 */
	'path' => 'Repositories',

	/**
	 * Default path of models in laravel is the `app` folder.
	 * In this case:
	 * 		app/
	 */
	'model_path' => '',

	/**
	 * Default path of contracts in laravel is the `Repositories` folder inside the `app` folder.
	 * In this case:
	 * 		app/Repositories
	 */
	'contract_path' => '',

	/**
	 * Configure the naming convention you wish for your repositories.
	 *
	 * Default:
	 * 		- Contract: {name}Repository
	 * 		- Eloquent: Eloquent{name}Repository
	 *
	 * Example: php artisan make:repository Users 
	 * 		- Contract: UsersRepository
	 * 		- Eloquent: EloquentUsersRepository
	 */
	'fileNames' => [

		'contract' => '{name}Repository',

		'eloquent' => 'Eloquent{name}Repository',
		
	],

];