## 组合 - `Composite`

### 定义

把多个对象组成树状结构来表示局部与整体，这样用户可以一样的对待单个对象和对象的组合。

### 场景

* 需要表示一个对象整体或部分层次，在具有整体和部分的层次结构中，希望通过一种方式忽略整体与部分的差异，可以一致地对待它们。
* 让客户能够忽略不同对象层次的变化，客户端可以针对抽象构件编程，无须关心对象层次结构的细节。

### 特性

#### 优点

* 可以清楚地定义分层次的复杂对象，表示对象的全部或部分层次，使得增加新构件也更容易。
* 客户端调用简单，客户端可以一致的使用组合结构或其中单个对象。
* 定义了包含叶子对象和容器对象的类层次结构，叶子对象可以被组合成更复杂的容器对象，而这个容器对象又可以被组合，这样不断递归下去，可以形成复杂的树形结构。
* 更容易在组合体内加入对象构件，客户端不必因为加入了新的对象构件而更改原有代码。

#### 缺点

使设计变得更加抽象，对象的业务规则如果很复杂，则实现组合模式具有很大挑战性，而且不是所有的方法都与叶子对象子类都有关联。