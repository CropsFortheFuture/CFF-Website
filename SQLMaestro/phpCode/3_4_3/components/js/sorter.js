define(function(require, exports) {

    var Class = require('class');

    exports.Sorter = Class.extend({
        init: function($sortableColumns) {
            var self = this;
            this.sortingColumns = [];
            this.sortableColumns = [];

            $sortableColumns.each(function (index, col) {
                var $col = $(col);
                self.sortableColumns.push($col.data());

                var sortIndex = $col.data('sort-index');
                if (sortIndex == undefined) {
                    return;
                }

                self.sortingColumns[sortIndex] = ($col.hasClass('descending') ? 'd' : 'a') + $col.data('field-name');
            });

            $sortableColumns.click(function(e) {
                e.preventDefault();
                var fieldName = $(this).attr('data-field-name');
                
                if (e.shiftKey) {
                    self.addColumn(fieldName);
                } else if (e.ctrlKey) {
                    self.deleteColumn(fieldName);
                } else {
                    self.sortByColumn(fieldName);
                }
                
                self.applySort();
            });
        },

        getSortableColumns: function () {
            return this.sortableColumns;
        },

        applySort: function() {
            var self = this;
            require(['jquery/jquery.query'], function () {
                if (self.sortingColumns.length > 0) {
                    window.location = jQuery.query.set('order', self.sortingColumns);
                } else {
                    window.location = jQuery.query.remove('order').set('operation', 'resetorder');
                }
            });
        },

        _getColumnIndexByName: function(fieldName) {
            for (var i = 0; i < this.sortingColumns.length; i++) {
                if (this.sortingColumns[i].slice(1) == fieldName) {
                    return i;
                }
            }
        },

        addColumn: function(fieldName, order) {
            var index = this._getColumnIndexByName(fieldName);
            if (index == undefined) {
                this.sortingColumns.push((order || 'a') + fieldName);
                return;
            }

            if (this.sortingColumns[index].charAt(0) == 'a') {
                this.sortingColumns[index] = 'd' + fieldName;
            } else {
                this.sortingColumns[index] = 'a' + fieldName;
            }
        },

        deleteColumn: function(fieldName) {
            var index = this._getColumnIndexByName(fieldName);
            if (index !== undefined) {
                this.sortingColumns.splice(index, 1);
            }
        },

        sortByColumn: function(fieldName) {
            var index = this._getColumnIndexByName(fieldName);
            var orderType = 'd';

            if (index == undefined || this.sortingColumns[index].charAt(0) == 'd') {
                orderType = 'a';
            }
            
            this.sortingColumns = [orderType + fieldName];
        },

        clear: function () {
            this.sortingColumns = [];
        }
    });
    
});