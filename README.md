
# TASK_APIs



## API Reference


### ToDOList

#### Get tasks index

```http
  GET /api/tasks
```
#### Create a new task

```http
  POST /api/task/create
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `content`      | `string` | **Required**. task content |

#### Check task as done (is_done == 1)

```http
  POST /api/task/status/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `bigint` | **Required**. task Id |
| `is_done`      | `boolean` | **Required**. Checkbox input to verify if task is done or not |

### CURD, with authentication service.

#### Get posts index

```http
  GET /api/posts
```
#### Create a new post

```http
  POST /api/post/create
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `title`      | `string` | **Required**. post title |
| `body`      | `string` | **Required**. post body |

#### Update an existing post

```http
  POST /api/post/update/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `bigint` | **Required** post Id | 
| `title`      | `string` | edit an existing post title | 
| `body`      | `string` | edit an exisiting post body |

#### Delete an existing post


```http
  DELETE /api/post/delete/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `bigint` | **Required** post Id | 

_________________________________

#### Register a new user

```http
  POST /api/register
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `name`      | `string` | **Required**. username |
| `email`      | `string` | **Required**. user email address |
| `password`      | `string` | **Required**. user password |

#### Start a session

```http
  POST /api/login
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `email`      | `string` | **Required**. user email address |
| `password`      | `string` | **Required**. user password |


#### End a session

```http
  POST /api/logout
```
___________________________

### User managment functionality

```http
  POST /api/role
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `role_id`      | `string` | **Required** specified as below to edit the user priviliges |
| `email`      | `string` | **Required**. user email |


role_id = {
    
    1 : admin "has all privileges"
	2 : editor can "post, edit, delete" 	
	3 : user 	can "only read"
}
