## 访问者 - `Visitor`

### 定义

封装一些施加于某种数据结构元素之上的操作。一旦这些操作需要修改，接受这个操作的数据结构可以保持不变。访问者模式适用于数据结构相对稳定的系统，它把数据结构和作用于结构上的操作之间的耦合解脱开，使得操作集合可以相对自由的演化。

### 场景

* 一个对象结构包含很多类操作，它们有不同的接口，而你想对这些对象实施一些依赖于其具体类的操作。
* 一个对象中存在着一些与本对象不相干(或者关系较弱)的操作，为了避免这些操作污染这个对象，则可以使用访问者模式来把这些操作封装到访问者中去。
* 定义对象结构的类很少改变，但经常需要在此结构上定义新的操作。

### 特性

#### 优点

* 将数据结构和作用于结构上的操作解耦，使得操作集合可以独立变化。
* 添加新的操作或者说访问者会非常容易。
* 将对各个元素的一组操作集中在一个访问者类当中。
* 使得类层次结构不改变的情况下，可以针对各个层次做出不同的操作，而不影响类层次结构的完整性。
* 可以跨越类层次结构，访问不同层次的元素类，做出相应的操作。

#### 缺点

* 增加新的元素会非常困难
* 实现起来比较复杂，会增加系统的复杂性
* 破坏封装，如果将访问行为放在各个元素中，则可以不暴露元素的内部结构和状态，但使用访问者模式的时候，为了让访问者能获取到所关心的信息，元素类不得不暴露出一些内部的状态和结构，就像收入和支出类必须提供访问金额和单子的项目的方法一样
